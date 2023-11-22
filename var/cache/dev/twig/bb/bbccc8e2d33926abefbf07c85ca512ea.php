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

/* page/contact.html.twig */
class __TwigTemplate_7156c9168ca69df65bfbcaca60739cc5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Principal Content Start -->
   <div id=\"contact\">
   \t  <div class=\"container\">
   \t    <div class=\"col-xs-12 col-sm-8 col-sm-push-2\">
       \t   <h1>CONTACT US</h1>
       \t   <hr>
       \t   <p>Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
\t\t\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'errors');
        echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "FirstName", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "LastName", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "Email", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "Subject", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "Message", [], "any", false, false, false, 33), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "Send", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "pull-right btn btn-lg sr-button"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
\t       <hr class=\"divider\">
\t       <div class=\"address\">
\t           <h3>GET IN TOUCH</h3>
\t           <hr>
\t           <p>Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero.</p>
\t\t       <div class=\"ending text-center\">
\t\t\t        <ul class=\"list-inline social-buttons\">
\t\t\t            <li><a href=\"#\"><i class=\"fa fa-facebook sr-icons\"></i></a>
\t\t\t            </li>
\t\t\t            <li><a href=\"#\"><i class=\"fa fa-twitter sr-icons\"></i></a>
\t\t\t            </li>
\t\t\t            <li><a href=\"#\"><i class=\"fa fa-google-plus sr-icons\"></i></a>
\t\t\t            </li>
\t\t\t        </ul>
\t\t\t\t    <ul class=\"list-inline contact\">
\t\t\t\t       <li class=\"footer-number\"><i class=\"fa fa-phone sr-icons\"></i>  (00228)92229954 </li>
\t\t\t\t       <li><i class=\"fa fa-envelope sr-icons\"></i>  kouvenceslas93@gmail.com</li>
\t\t\t\t    </ul>
\t\t\t\t    <p>Photography Fanatic Template &copy; 2017</p>
\t\t       </div>
\t       </div>
\t    </div>   
   \t  </div>
   </div>
<!-- Principal Content Start -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "page/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 37,  141 => 34,  137 => 33,  129 => 28,  121 => 23,  113 => 18,  107 => 15,  101 => 12,  97 => 11,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title%}Blog{% endblock %}
{% block body%}
<!-- Principal Content Start -->
   <div id=\"contact\">
   \t  <div class=\"container\">
   \t    <div class=\"col-xs-12 col-sm-8 col-sm-push-2\">
       \t   <h1>CONTACT US</h1>
       \t   <hr>
       \t   <p>Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
\t\t\t{{ form_start(form, {'attr': {'class':'form-horizontal'}}) }}
\t\t\t{{ form_errors(form) }}
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t{{ form_row(form.FirstName, {'attr': {'class':'form-control'}}) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t{{ form_row(form.LastName, {'attr': {'class':'form-control'}}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t{{ form_row(form.Email, {'attr': {'class':'form-control'}}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t{{ form_row(form.Subject, {'attr': {'class':'form-control'}}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t{{ form_row(form.Message, {'attr': {'class':'form-control'}}) }}
\t\t\t\t\t\t{{ form_row(form.Send, {'attr': {'class':'pull-right btn btn-lg sr-button'}}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{{ form_end(form) }}
\t       <hr class=\"divider\">
\t       <div class=\"address\">
\t           <h3>GET IN TOUCH</h3>
\t           <hr>
\t           <p>Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero.</p>
\t\t       <div class=\"ending text-center\">
\t\t\t        <ul class=\"list-inline social-buttons\">
\t\t\t            <li><a href=\"#\"><i class=\"fa fa-facebook sr-icons\"></i></a>
\t\t\t            </li>
\t\t\t            <li><a href=\"#\"><i class=\"fa fa-twitter sr-icons\"></i></a>
\t\t\t            </li>
\t\t\t            <li><a href=\"#\"><i class=\"fa fa-google-plus sr-icons\"></i></a>
\t\t\t            </li>
\t\t\t        </ul>
\t\t\t\t    <ul class=\"list-inline contact\">
\t\t\t\t       <li class=\"footer-number\"><i class=\"fa fa-phone sr-icons\"></i>  (00228)92229954 </li>
\t\t\t\t       <li><i class=\"fa fa-envelope sr-icons\"></i>  kouvenceslas93@gmail.com</li>
\t\t\t\t    </ul>
\t\t\t\t    <p>Photography Fanatic Template &copy; 2017</p>
\t\t       </div>
\t       </div>
\t    </div>   
   \t  </div>
   </div>
<!-- Principal Content Start -->
{% endblock %}", "page/contact.html.twig", "/home/alumno/DWES/symfony-blog-esqueleto/templates/page/contact.html.twig");
    }
}
