<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog/single_post.html.twig */
class __TwigTemplate_68264419226993158c026b112808ae21 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/single_post.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/single_post.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/single_post.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Post
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<!-- Principal Content Start -->
\t<div id=\"blog\" style=\"color: black;\">
\t\t<div id=\"single\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 12
        if ( !(isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "\t\t\t\t\t<h2>Post not found</h2>
\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t<!-- Full Article -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<h2>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t<hr class=\"subtitle\">
\t\t\t\t\t\t<div class=\"block1\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t\t\t\t\t\t<div class=\"post-heading\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/index/gallery/" . twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 22, $this->source); })()), "image", [], "any", false, false, false, 22))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 25, $this->source); })()), "content", [], "any", false, false, false, 25), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h4>- By
\t\t\t\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t";
            // line 30
            echo "\t\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t\t<li>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 31, $this->source); })()), "publishedAt", [], "any", false, false, false, 31), "d"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 32, $this->source); })()), "publishedAt", [], "any", false, false, false, 32), "F"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"page-scroll\" href=\"#form\">COMMENT</a>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments sr-icons\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 35, $this->source); })()), "NumComments", [], "any", false, false, false, 35), "html", null, true);
            echo "</i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_like", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 38, $this->source); })()), "slug", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">LIKE</a>
\t\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart sr-icons\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 40, $this->source); })()), "NumLikes", [], "any", false, false, false, 40), "html", null, true);
            echo "</i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t\t\t\t\t\t<h3>Recent Posts</h3>
\t\t\t\t\t\t\t\t<hr><br>
\t\t\t\t\t\t\t\t";
            // line 47
            if ((isset($context["recentposts"]) || array_key_exists("recentposts", $context) ? $context["recentposts"] : (function () { throw new RuntimeError('Variable "recentposts" does not exist.', 47, $this->source); })())) {
                // line 48
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["recentposts"]) || array_key_exists("recentposts", $context) ? $context["recentposts"] : (function () { throw new RuntimeError('Variable "recentposts" does not exist.', 48, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "partials/recent_post.html.twig", ["post" => $context["post"]]);
                    echo "
\t\t\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "\t\t\t\t\t\t\t\t";
            } else {
                // line 52
                echo "\t\t\t\t\t\t\t\t\t<p>No se han encontrado posts</p>
\t\t\t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t{<div class=\"col-xs-12 col-sm-12 block2\">
\t\t\t\t\t\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 57, $this->source); })()), "comments", [], "any", false, false, false, 57));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "partials/comment.html.twig", ["comment" => $context["comment"]]);
                echo "
\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t\t\t\t\t\t\t\t<hr class=\"line\">
\t\t\t\t\t\t\t\t\t";
            // line 61
            echo twig_include($this->env, $context, "partials/form_comment.html.twig");
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- End of Full Article -->
\t\t\t";
        }
        // line 70
        echo "\t\t</div>
\t</div>
\t<!-- End of Principal Content Start -->
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blog/single_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 70,  251 => 61,  248 => 60,  231 => 58,  214 => 57,  209 => 54,  205 => 52,  202 => 51,  185 => 49,  167 => 48,  165 => 47,  155 => 40,  150 => 38,  144 => 35,  138 => 32,  134 => 31,  131 => 30,  127 => 28,  121 => 25,  113 => 22,  105 => 17,  101 => 15,  97 => 13,  95 => 12,  89 => 8,  79 => 7,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Post
{% endblock %}

{% block body %}
\t<!-- Principal Content Start -->
\t<div id=\"blog\" style=\"color: black;\">
\t\t<div id=\"single\">
\t\t\t<div class=\"container\">
\t\t\t\t{% if not post %}
\t\t\t\t\t<h2>Post not found</h2>
\t\t\t\t{% else %}
\t\t\t\t\t<!-- Full Article -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<h2>{{ post.title }}</h2>
\t\t\t\t\t\t<hr class=\"subtitle\">
\t\t\t\t\t\t<div class=\"block1\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t\t\t\t\t\t<div class=\"post-heading\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('images/index/gallery/' ~ post.image) }}\" alt=\"{{ post.title }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t{{ post.content }}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h4>- By
\t\t\t\t\t\t\t\t\t{{ post.user.name }}</h4>
\t\t\t\t\t\t\t\t{# <hr> #}
\t\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t\t<li>{{ post.publishedAt | date('d') }}
\t\t\t\t\t\t\t\t\t\t{{ post.publishedAt | date('F') }}</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"page-scroll\" href=\"#form\">COMMENT</a>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments sr-icons\">{{ post.NumComments }}</i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('post_like', {slug: post.slug}) }}\">LIKE</a>
\t\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart sr-icons\">{{ post.NumLikes }}</i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t\t\t\t\t\t<h3>Recent Posts</h3>
\t\t\t\t\t\t\t\t<hr><br>
\t\t\t\t\t\t\t\t{% if recentposts %}
\t\t\t\t\t\t\t\t\t{% for post in recentposts %}
\t\t\t\t\t\t\t\t\t\t{{ include (\"partials/recent_post.html.twig\", {'post': post}) }}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<p>No se han encontrado posts</p>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t{<div class=\"col-xs-12 col-sm-12 block2\">
\t\t\t\t\t\t\t\t\t{% for comment in post.comments %}
\t\t\t\t\t\t\t\t\t\t{{ include ('partials/comment.html.twig', {'comment': comment}) }}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t<hr class=\"line\">
\t\t\t\t\t\t\t\t\t{{ include ('partials/form_comment.html.twig') }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- End of Full Article -->
\t\t\t{% endif %}
\t\t</div>
\t</div>
\t<!-- End of Principal Content Start -->
</div>{% endblock %}
", "blog/single_post.html.twig", "/home/alumno/DWES/symfony-blog-esqueleto/templates/blog/single_post.html.twig");
    }
}
