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

/* partials/image.html.twig */
class __TwigTemplate_8ed516a458b874c3fc6b09af19eb8fe1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/image.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/image.html.twig"));

        // line 1
        echo "                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                <div class=\"sol\">
                  <img class=\"img-responsive\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/index/portfolio/" . twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 3, $this->source); })()), "file", [], "any", false, false, false, 3))), "html", null, true);
        echo "\" alt=\"First category picture\">
                  <div class=\"behind\">
                      <div class=\"head text-center\">
                        <ul class=\"list-inline\">
                          <li>
                            <a class=\"gallery\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/index/gallery/" . twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 8, $this->source); })()), "file", [], "any", false, false, false, 8))), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-original-title=\"Quick View\">
                              <i class=\"fa fa-eye\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"#\" data-toggle=\"tooltip\" data-original-title=\"Click if you like it\">
                              <i class=\"fa fa-heart\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"#\" data-toggle=\"tooltip\" data-original-title=\"Download\">
                              <i class=\"fa fa-download\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"#\" data-toggle=\"tooltip\" data-original-title=\"More information\">
                              <i class=\"fa fa-info\"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class=\"row box-content\">
                        <ul class=\"list-inline text-center\">
                          <li><i class=\"fa fa-eye\"></i> ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 31, $this->source); })()), "numViews", [], "any", false, false, false, 31), "html", null, true);
        echo "</li>
                          <li><i class=\"fa fa-heart\"></i> ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 32, $this->source); })()), "numLikes", [], "any", false, false, false, 32), "html", null, true);
        echo "</li>
                          <li><i class=\"fa fa-download\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 33, $this->source); })()), "numDownloads", [], "any", false, false, false, 33), "html", null, true);
        echo "</li>
                        </ul>
                      </div>
                  </div>
                </div>
                </div> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  85 => 32,  81 => 31,  55 => 8,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                <div class=\"sol\">
                  <img class=\"img-responsive\" src=\"{{ asset('images/index/portfolio/' ~ image.file) }}\" alt=\"First category picture\">
                  <div class=\"behind\">
                      <div class=\"head text-center\">
                        <ul class=\"list-inline\">
                          <li>
                            <a class=\"gallery\" href=\"{{ asset('images/index/gallery/' ~ image.file) }}\" data-toggle=\"tooltip\" data-original-title=\"Quick View\">
                              <i class=\"fa fa-eye\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"#\" data-toggle=\"tooltip\" data-original-title=\"Click if you like it\">
                              <i class=\"fa fa-heart\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"#\" data-toggle=\"tooltip\" data-original-title=\"Download\">
                              <i class=\"fa fa-download\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"#\" data-toggle=\"tooltip\" data-original-title=\"More information\">
                              <i class=\"fa fa-info\"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class=\"row box-content\">
                        <ul class=\"list-inline text-center\">
                          <li><i class=\"fa fa-eye\"></i> {{ image.numViews }}</li>
                          <li><i class=\"fa fa-heart\"></i> {{ image.numLikes }}</li>
                          <li><i class=\"fa fa-download\"></i> {{ image.numDownloads }}</li>
                        </ul>
                      </div>
                  </div>
                </div>
                </div> ", "partials/image.html.twig", "/home/alumno/DWES/symfony-blog-esqueleto/templates/partials/image.html.twig");
    }
}
