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

/* partials/post.html.twig */
class __TwigTemplate_dbd53e49f0cffa4e1c0c851cac678ca5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/post.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/post.html.twig"));

        // line 1
        echo "<div class=\"col-xs-12 col-sm-12\">
    <div class=\"post\">
    <div class=\"post-heading\">
        <span>";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 4, $this->source); })()), "publishedAt", [], "any", false, false, false, 4), "d"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 4, $this->source); })()), "publishedAt", [], "any", false, false, false, 4), "F"), "html", null, true);
        echo "</span>
        <img class=\"img-responsive\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/index/gallery/" . twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 5, $this->source); })()), "image", [], "any", false, false, false, 5))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "\" width=\"650\" height=\"350\">

    </div>
    <div class=\"post-body\">
        <h3><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_post", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 9, $this->source); })()), "slug", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</strong></a></h3>
        <hr>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "content", [], "any", false, false, false, 11), 0, 300) . "..."), "html", null, true);
        echo "</p>
    </div>
    <div class=\"post-footer\">
        <a class=\"btn\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_post", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "slug", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">READ MORE...</a>
        <span>
        <i class=\"fa fa-heart sr-icons\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "numLikes", [], "any", false, false, false, 16), "html", null, true);
        echo "
        <i class=\"fa fa-comments sr-icons\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 17, $this->source); })()), "numComments", [], "any", false, false, false, 17), "html", null, true);
        echo "
        </span>
    </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 17,  81 => 16,  76 => 14,  70 => 11,  63 => 9,  54 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-xs-12 col-sm-12\">
    <div class=\"post\">
    <div class=\"post-heading\">
        <span>{{ post.publishedAt | date('d') }} {{ post.publishedAt | date('F') }}</span>
        <img class=\"img-responsive\" src=\"{{ asset('images/index/gallery/' ~ post.image) }}\" alt=\"{{ post.title }}\" width=\"650\" height=\"350\">

    </div>
    <div class=\"post-body\">
        <h3><a href=\"{{ path('single_post', {'slug':post.slug}) }}\"><strong>{{post.title}}</strong></a></h3>
        <hr>
    <p>{{post.content[:300] ~ '...' }}</p>
    </div>
    <div class=\"post-footer\">
        <a class=\"btn\" href=\"{{ path('single_post', {'slug':post.slug})}}\">READ MORE...</a>
        <span>
        <i class=\"fa fa-heart sr-icons\"></i> {{post.numLikes}}
        <i class=\"fa fa-comments sr-icons\"></i> {{post.numComments}}
        </span>
    </div>
    </div>
</div>", "partials/post.html.twig", "/home/alumno/DWES/symfony-blog-esqueleto/templates/partials/post.html.twig");
    }
}
