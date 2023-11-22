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

/* blog/blog.html.twig */
class __TwigTemplate_d31ab49b7367d10a076e74b5a8c7dfbc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/blog.html.twig", 1);
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

        echo "Blog
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<!-- Principal Content Start -->
\t<div id=\"blog\" style=\"color: black;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-8 row\">
\t\t\t\t\t";
        // line 10
        if ((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 11, $this->source); })()), "results", [], "any", false, false, false, 11));
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
                // line 12
                echo "\t\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "partials/post.html.twig", ["post" => $context["post"]]);
                echo "
\t\t\t\t\t\t";
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
            // line 14
            echo "\t\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t\t<p>No se han encontrado posts</p>
\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 17, $this->source); })()), "hasToPaginate", [], "any", false, false, false, 17)) {
            // line 18
            echo "\t\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t";
            // line 20
            if (twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 20, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 20)) {
                // line 21
                echo "\t\t\t\t\t\t\t\t\t<li class=\"prev\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 22, $this->source); })()), "previousPage", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\" rel=\"previous\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fw fa-long-arrow-left\"></i>
\t\t\t\t\t\t\t\t\t\t\tPrevious</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t\t\t\t\t<li class=\"prev disabled\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fw fa-arrow-left\"></i>
\t\t\t\t\t\t\t\t\t\t\tPrevious
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 34
            echo "
\t\t\t\t\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 35, $this->source); })()), "lastPage", [], "any", false, false, false, 35)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["i"] == twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 36, $this->source); })()), "currentPage", [], "any", false, false, false, 36))) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 38
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog", ["page" => $context["i"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
\t\t\t\t\t\t\t\t";
            // line 47
            if (twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 47, $this->source); })()), "hasNextPage", [], "any", false, false, false, 47)) {
                // line 48
                echo "\t\t\t\t\t\t\t\t\t<li class=\"next\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 49, $this->source); })()), "nextPage", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" rel=\"next\">Next
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fw fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t\t\t\t\t<li class=\"next disabled\">
\t\t\t\t\t\t\t\t\t\t<span>Next
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fw fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-4\">
\t\t\t\t\t<form class=\"\" action='";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_buscar");
        echo "'>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" style=\"display:unset; width:85%\" placeholder=\"Search\" name='searchTerm'>
\t\t\t\t\t\t<button type='submit' class=\"btn btn-primary btn-danger\">
\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"panel\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>Categories</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Category I</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Category II</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Category III</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Category IV</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"last\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Category V</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t<h4>Soluta</h4>
\t\t\t\t\t\t<p>Quod soluta corrupti earum officia vel inventore vitae quidem, consequuntur odit impedit.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<h3>Recent Posts</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t";
        // line 101
        if ((isset($context["recentposts"]) || array_key_exists("recentposts", $context) ? $context["recentposts"] : (function () { throw new RuntimeError('Variable "recentposts" does not exist.', 101, $this->source); })())) {
            // line 102
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recentposts"]) || array_key_exists("recentposts", $context) ? $context["recentposts"] : (function () { throw new RuntimeError('Variable "recentposts" does not exist.', 102, $this->source); })()));
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
                // line 103
                echo "\t\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "partials/recent_post.html.twig", ["post" => $context["post"]]);
                echo "
\t\t\t\t\t\t";
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
            // line 105
            echo "\t\t\t\t\t";
        } else {
            // line 106
            echo "\t\t\t\t\t\t<p>No se han encontrado posts</p>
\t\t\t\t\t";
        }
        // line 108
        echo "\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<!-- End of Principal Content Start -->

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blog/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 108,  317 => 106,  314 => 105,  297 => 103,  279 => 102,  277 => 101,  238 => 65,  234 => 63,  229 => 60,  221 => 54,  213 => 49,  210 => 48,  208 => 47,  205 => 46,  199 => 45,  191 => 42,  188 => 41,  182 => 38,  179 => 37,  176 => 36,  172 => 35,  169 => 34,  160 => 27,  152 => 22,  149 => 21,  147 => 20,  143 => 18,  140 => 17,  136 => 15,  133 => 14,  116 => 12,  98 => 11,  96 => 10,  89 => 5,  79 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Blog
{% endblock %}
{% block body %}
\t<!-- Principal Content Start -->
\t<div id=\"blog\" style=\"color: black;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-8 row\">
\t\t\t\t\t{% if posts %}
\t\t\t\t\t\t{% for post in posts.results %}
\t\t\t\t\t\t\t{{ include (\"partials/post.html.twig\", {'post': post}) }}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p>No se han encontrado posts</p>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if posts.hasToPaginate %}
\t\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t{% if posts.hasPreviousPage %}
\t\t\t\t\t\t\t\t\t<li class=\"prev\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('blog', {page: posts.previousPage}) }}\" rel=\"previous\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fw fa-long-arrow-left\"></i>
\t\t\t\t\t\t\t\t\t\t\tPrevious</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<li class=\"prev disabled\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fw fa-arrow-left\"></i>
\t\t\t\t\t\t\t\t\t\t\tPrevious
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% for i in 1..posts.lastPage %}
\t\t\t\t\t\t\t\t\t{% if i == posts.currentPage %}
\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t<span>{{ i }}</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('blog', {page: i}) }}\">{{ i }}</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t{% if posts.hasNextPage %}
\t\t\t\t\t\t\t\t\t<li class=\"next\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('blog', {page: posts.nextPage}) }}\" rel=\"next\">Next
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fw fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<li class=\"next disabled\">
\t\t\t\t\t\t\t\t\t\t<span>Next
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fw fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-4\">
\t\t\t\t\t<form class=\"\" action='{{ path('blog_buscar') }}'>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" style=\"display:unset; width:85%\" placeholder=\"Search\" name='searchTerm'>
\t\t\t\t\t\t<button type='submit' class=\"btn btn-primary btn-danger\">
\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"panel\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>Categories</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Category I</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Category II</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Category III</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Category IV</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"last\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Category V</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t<h4>Soluta</h4>
\t\t\t\t\t\t<p>Quod soluta corrupti earum officia vel inventore vitae quidem, consequuntur odit impedit.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<h3>Recent Posts</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t{% if recentposts %}
\t\t\t\t\t\t{% for post in recentposts %}
\t\t\t\t\t\t\t{{ include (\"partials/recent_post.html.twig\", {'post': post}) }}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p>No se han encontrado posts</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<!-- End of Principal Content Start -->

\t{% endblock %}
", "blog/blog.html.twig", "/home/alumno/DWES/symfony-blog-esqueleto/templates/blog/blog.html.twig");
    }
}
