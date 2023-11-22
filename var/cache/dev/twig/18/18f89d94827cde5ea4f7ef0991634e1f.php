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

/* base.html.twig */
class __TwigTemplate_3cef8b7cc1016d2ae9c30bff53b6e7ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>  

<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  \t<!-- Bootstrap core css -->
  \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  \t<!-- Bootstrap core css -->
  \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  \t<!-- Magnific-popup css -->
  \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
  \t<!-- Font Awesome icons -->
  \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body id=\"page-top\">

";
        // line 28
        echo twig_include($this->env, $context, "partials/navigation.html.twig");
        echo "
<!-- Principal Content Start -->
    ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "   <!-- Footer -->
   <footer class=\"home-page\">
     <div class=\"container text-muted text-center\">
       <div class=\"row\">
         <ul class=\"nav col-sm-4\">
           <li class=\"footer-number\"><i class=\"fa fa-phone sr-icons\"></i>  (00228)92229954 </li>
           <li><i class=\"fa fa-envelope sr-icons\"></i>  kouvenceslas93@gmail.com</li>
           <li>Photography Fanatic Template &copy; 2017</li>
         </ul>
         <ul class=\"list-inline social-buttons col-sm-4 col-sm-push-4\">
            <li><a href=\"#\"><i class=\"fa fa-facebook sr-icons\"></i></a>
            </li>
            <li><a href=\"#\"><i class=\"fa fa-twitter sr-icons\"></i></a>
            </li>
            <li><a href=\"#\"><i class=\"fa fa-google-plus sr-icons\"></i></a>
            </li>
         </ul>
       </div>
     </div>
   </footer>

   <!-- Jquery -->
   <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
   <!-- Bootstrap core Javascript -->
   <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
   <!-- Plugins -->
   <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
   <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
   <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollreveal.min.js"), "html", null, true);
        echo "\"></script>
   <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 30,  156 => 8,  142 => 60,  138 => 59,  134 => 58,  130 => 57,  125 => 55,  120 => 53,  96 => 31,  94 => 30,  89 => 28,  75 => 17,  70 => 15,  65 => 13,  60 => 11,  54 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>  

<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t  <title>{% block title %}Blog{% endblock %}</title>

  \t<!-- Bootstrap core css -->
  \t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\">
  \t<!-- Bootstrap core css -->
  \t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">
  \t<!-- Magnific-popup css -->
  \t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/magnific-popup.css') }}\">
  \t<!-- Font Awesome icons -->
  \t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('font-awesome/css/font-awesome.min.css') }}\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body id=\"page-top\">

{{ include ('partials/navigation.html.twig')}}
<!-- Principal Content Start -->
    {% block body %}{% endblock %}
   <!-- Footer -->
   <footer class=\"home-page\">
     <div class=\"container text-muted text-center\">
       <div class=\"row\">
         <ul class=\"nav col-sm-4\">
           <li class=\"footer-number\"><i class=\"fa fa-phone sr-icons\"></i>  (00228)92229954 </li>
           <li><i class=\"fa fa-envelope sr-icons\"></i>  kouvenceslas93@gmail.com</li>
           <li>Photography Fanatic Template &copy; 2017</li>
         </ul>
         <ul class=\"list-inline social-buttons col-sm-4 col-sm-push-4\">
            <li><a href=\"#\"><i class=\"fa fa-facebook sr-icons\"></i></a>
            </li>
            <li><a href=\"#\"><i class=\"fa fa-twitter sr-icons\"></i></a>
            </li>
            <li><a href=\"#\"><i class=\"fa fa-google-plus sr-icons\"></i></a>
            </li>
         </ul>
       </div>
     </div>
   </footer>

   <!-- Jquery -->
   <script type=\"text/javascript\" src=\"{{ asset('js/jquery.min.js') }}\"></script>
   <!-- Bootstrap core Javascript -->
   <script type=\"text/javascript\" src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
   <!-- Plugins -->
   <script type=\"text/javascript\" src=\"{{ asset('js/jquery.easing.min.js') }}\"></script>
   <script type=\"text/javascript\" src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
   <script type=\"text/javascript\" src=\"{{ asset('js/scrollreveal.min.js') }}\"></script>
   <script type=\"text/javascript\" src=\"{{ asset('js/script.js') }}\"></script>
</body>
</html>
", "base.html.twig", "/home/alumno/DWES/symfony-blog-esqueleto/templates/base.html.twig");
    }
}
