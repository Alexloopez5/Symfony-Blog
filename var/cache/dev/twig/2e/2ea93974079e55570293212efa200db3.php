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

/* partials/navigation.html.twig */
class __TwigTemplate_f30bc8bf437965f854f57070fc8df741 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navigation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navigation.html.twig"));

        // line 1
        echo "<!-- Navigation Bar -->
   <nav class=\"navbar navbar-fixed-top navbar-default\">
     <div class=\"container\">
         <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#menu\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a  class=\"navbar-brand page-scroll\" href=\"#page-top\">
              <span>[PHOTO]</span>
            </a>
         </div>
         <div class=\"collapse navbar-collapse navbar-right\" id=\"menu\">
            <ul class=\"nav navbar-nav\">
            <li>
              <li class=\"";
        // line 18
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "attributes", [], "any", false, false, false, 18), "get", ["_route"], "method", false, false, false, 18) == "index")) ? ("active") : (""));
        echo " lien\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"fa fa-home sr-icons\"></i> Home</a></li>
              <li class=\"";
        // line 19
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "attributes", [], "any", false, false, false, 19), "get", ["_route"], "method", false, false, false, 19) == "about")) ? ("active") : (""));
        echo " lien\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\"><i class=\"fa fa-bookmark sr-icons\"></i> About</a></li>
              <li class=\"";
        // line 20
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "attributes", [], "any", false, false, false, 20), "get", ["_route"], "method", false, false, false, 20) == "blog")) ? ("active") : (""));
        echo " lien\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\"><i class=\"fa fa-file-text sr-icons\"></i> Blog</a></li>
              <li class=\"";
        // line 21
        echo ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", ["_route"], "method", false, false, false, 21) == "contact") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", ["_route"], "method", false, false, false, 21) == "`single_post`"))) ? ("active") : (""));
        echo " lien\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"><i class=\"fa fa-phone-square sr-icons\"></i> Contact</a></li>
              ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fa fa-sign-out sr-icons\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
            echo " - Logout</a></li>
                <li><a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newpost");
            echo "\"><i class=\"fa fa-plus-square sr-icons\"></i> New post</a></li>
              ";
        } else {
            // line 26
            echo "                <li class=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", ["_route"], "method", false, false, false, 26) == "app_login")) ? ("active") : (""));
            echo " lien\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fa fa-sign-in sr-icons\"></i> Login</a></li>
                <li class=\"";
            // line 27
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "attributes", [], "any", false, false, false, 27), "get", ["_route"], "method", false, false, false, 27) == "app_register")) ? ("active") : (""));
            echo " \"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"><i class=\"fa fa-user-secret sr-icons\"></i> Register</a></li>
              ";
        }
        // line 29
        echo "            </ul>
         </div>
     </div>
   </nav>
<!-- End of Navigation Bar -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 29,  107 => 27,  100 => 26,  95 => 24,  88 => 23,  86 => 22,  80 => 21,  74 => 20,  68 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navigation Bar -->
   <nav class=\"navbar navbar-fixed-top navbar-default\">
     <div class=\"container\">
         <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#menu\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a  class=\"navbar-brand page-scroll\" href=\"#page-top\">
              <span>[PHOTO]</span>
            </a>
         </div>
         <div class=\"collapse navbar-collapse navbar-right\" id=\"menu\">
            <ul class=\"nav navbar-nav\">
            <li>
              <li class=\"{{ (app.request.attributes.get('_route') == 'index')  ? 'active': ''}} lien\"><a href=\"{{ path('index') }}\"><i class=\"fa fa-home sr-icons\"></i> Home</a></li>
              <li class=\"{{ (app.request.attributes.get('_route') == 'about')  ? 'active': ''}} lien\"><a href=\"{{ path('about') }}\"><i class=\"fa fa-bookmark sr-icons\"></i> About</a></li>
              <li class=\"{{ (app.request.attributes.get('_route') == 'blog')  ? 'active': ''}} lien\"><a href=\"{{ path('blog') }}\"><i class=\"fa fa-file-text sr-icons\"></i> Blog</a></li>
              <li class=\"{{ (app.request.attributes.get('_route') == 'contact' or app.request.attributes.get('_route') == '`single_post`')  ? 'active': ''}} lien\"><a href=\"{{ path('contact') }}\"><i class=\"fa fa-phone-square sr-icons\"></i> Contact</a></li>
              {% if app.user %}
                <li><a href=\"{{ path('app_logout') }}\"><i class=\"fa fa-sign-out sr-icons\"></i> {{ app.user.name }} - Logout</a></li>
                <li><a href=\"{{ path('newpost') }}\"><i class=\"fa fa-plus-square sr-icons\"></i> New post</a></li>
              {% else %}
                <li class=\"{{ (app.request.attributes.get('_route') == 'app_login')  ? 'active': ''}} lien\"><a href=\"{{ path('app_login') }}\"><i class=\"fa fa-sign-in sr-icons\"></i> Login</a></li>
                <li class=\"{{ (app.request.attributes.get('_route') == 'app_register')  ? 'active': ''}} \"><a href=\"{{ path('app_register') }}\"><i class=\"fa fa-user-secret sr-icons\"></i> Register</a></li>
              {% endif %}
            </ul>
         </div>
     </div>
   </nav>
<!-- End of Navigation Bar -->
", "partials/navigation.html.twig", "/home/alumno/DWES/symfony-blog-esqueleto/templates/partials/navigation.html.twig");
    }
}
