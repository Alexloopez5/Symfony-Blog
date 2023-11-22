<?php

namespace App\Controller;

use Symfony\Component\Filesystem\Filesystem;
use App\Entity\Comment;
use App\Entity\Post;
use App\Form\CommentFormType;
use App\Form\PostFormType;
use App\Repository\PostRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class BlogController extends AbstractController
{
    #[Route("/blog/buscar/{page}", name: 'blog_buscar')]
    public function buscar(ManagerRegistry $doctrine,  Request $request, int $page = 1): Response
    {
        $repository = $doctrine->getRepository(Post::class);
        
        // Realizar la consulta para obtener los dos posts más recientes
        $query = $repository->createQueryBuilder('post')
        ->orderBy('post.PublishedAt', 'DESC')
        ->setMaxResults(2)
        ->getQuery();
        
        // Ejecutar la consulta
        $recentPosts = $query->getResult();
        $searchTerm = $request->query->get('searchTerm');
        $posts = [];
        $posts = $repository->findByTextPaginated($page, $searchTerm);
         // O muestra todos los posts si no hay término de búsqueda
        
        return $this->render('blog/blog.html.twig', [
            'posts' => $posts,
            'searchTerm' => $searchTerm,
            'recentposts' =>$recentPosts
        ]);

    } 
   
    

    #[Route("/newpost", name: 'newpost')]
    public function newpost(ManagerRegistry $doctrine, Request $request,SluggerInterface $slugger): Response
    {
        $user = $this->getUser();
        $post = new Post();
        $formulario = $this->createForm(PostFormType::class,$post);
        $formulario->handleRequest($request);

        if($formulario->isSubmitted() && $formulario->isValid()){
            $post = $formulario->getData();
            $image = $formulario->get('Image')->getData();
            if ($image) {
                $originalimagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the image name as part of the URL
                $safeimagename = $slugger->slug($originalimagename);
                $newimagename = $safeimagename.'-'.uniqid().'.'.$image->guessExtension();
                
                // Move the image to the directory where images are stored
                try {
                    
                    $image->move(
                        $this->getParameter('images_directory'), $newimagename);

                } catch (imageException $e) {
                    // ... handle exception if something happens during image upload
                }
                $imagine = new \Imagine\Gd\Imagine();
                $size    = new \Imagine\Image\Box(650, 350);

                $mode    = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;
                $imagine->open($this->getParameter('images_directory') . '/' . $newimagename)
                    ->thumbnail($size, $mode)
                    ->save($this->getParameter('images_directory') . '/' . $newimagename);
                // updates the 'image$imagename' property to store the PDF image name
                // instead of its contents
                $post->setimage($newimagename);
            }
            $entityManager = $doctrine->getManager();
            $repository = $doctrine->getRepository(Post::class);
            $slugExistente = $repository->findOneBy(['Slug' => $slugger->slug($post->getTitle())]);
            if($slugExistente){
                $post->setSlug($slugger->slug($post->getTitle() . rand(0,1000)));
            }else{
                $post->setSlug($slugger->slug($post->getTitle()));
            }
            $post->setUser($user);
            $post->setNumLikes(0);
            $post->setNumComments(0);
            $post->setNumViews(0);
            $entityManager->persist($post);
            $entityManager->flush();
            return $this->redirectToRoute("blog");
        }
        return $this->render('blog/new_post.html.twig',["form" => $formulario->createView()]);

    }
    
    #[Route("/single_post/{slug}/like", name: 'post_like')]
    public function like(ManagerRegistry $doctrine, $slug): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $repository = $doctrine->getRepository(Post::class);
        $post = $repository->findOneBy(['Slug' => $slug]);

        if ($post) {
            // Llama a tu método addLike() para incrementar el contador de "likes"
            $post->addLike();

            // Obtén el EntityManager y realiza la operación de actualización en la base de datos
            $entityManager = $doctrine->getManager();
            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('single_post', ['slug' => $slug]);

        } else {
            // Manejo de error si no se encuentra la publicación
            return new Response("Publicación no encontrada", 404);
        }
    }

    #[Route("/blog/{page}", name: 'blog')]
    public function index(ManagerRegistry $doctrine,int $page = 1): Response
    {
        $repository = $doctrine->getRepository(Post::class);
        $posts = $repository->findAllPaginated($page);

        // Ejecutar la consulta
        $recentPosts = $repository->findRecents();

        return $this->render('blog/blog.html.twig', [
            'posts' => $posts, "recentposts" => $recentPosts]);
    }

    #[Route("/single_post/{slug}", name: 'single_post')]
    public function post(ManagerRegistry $doctrine, Request $request, $slug): Response
    {
        $repository = $doctrine->getRepository(Post::class);
        $post = $repository->findOneBy(["Slug"=>$slug]);
        $recents = $repository->findRecents();
        $comment = new Comment();
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(CommentFormType::class, $comment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $comment = $form->getData();
            $comment->setPost($post);  
            //Aumentamos en 1 el número de comentarios del post
            $post->setNumComments($post->getNumComments() + 1);
            $entityManager = $doctrine->getManager();    
            $entityManager->persist($comment);
            $entityManager->flush();
            return $this->redirectToRoute('single_post', ["slug" => $post->getSlug()]);
        }
        return $this->render('blog/single_post.html.twig', [
            'post' => $post,
            'recentposts' => $recents,
            'commentForm' => $form->createView()
        ]);
    }
}
