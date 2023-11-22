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

/* page/about.html.twig */
class __TwigTemplate_cceaea064afb289a44334d92afd265df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/about.html.twig", 1);
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

        echo "About";
        
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
        echo "<!-- Principal Content Start-->
   <div id=\"about\">

    <!-- Header -->
      <div class=\"row\">
         <div class=\"col-xs-12 intro\">
            <div class=\"carousel-inner\">
               <div class=\"item active\">
                <img class=\"img-responsive\" src=\"images/about_us.jpg\" alt=\"header picture\">
               </div>
               <div class=\"carousel-caption\">
                  <h1>ABOUT US</h1>
                  <p>About Us and our Services?</p>
                  <hr>
               </div>
            </div>
         </div>
      </div>
    <!-- End of header -->  

    <!-- Container Box -->
      <div class=\"container\">
        <div class=\"row\">
           <div class=\"col-xs-12 col-sm-6\">
             <div class=\"box-about\">
              <i class=\"fa fa-institution fa-2x\"></i>
              <h4>About Our Studio</h4>
              <p class=\"text-left text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi. Minus sequi iste, nam nobis, excepturi.Ut enim ad enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
             </div>
           </div>
           <div class=\"col-xs-12 col-sm-6\">
             <div class=\"box-about\">
              <i class=\"fa fa-group fa-2x\"></i>
              <h4>About Our Team</h4>
              <p class=\"text-left text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi. Minus sequi iste, nam nobis, excepturi.Ut enim ad enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
             </div>
           </div>
        </div>
        <div class=\"row\">
           <div class=\"col-xs-12 col-sm-6 row\">
             <ul class=\"list-inline text-center\">
                <li class=\"line\"></li>
              <li><i class=\"fa fa-tasks fa-2x\"></i></li>
              <li class=\"line\"></li>
              <li><h4>Our Services</h4></li>
              <li class=\"line\"></li>
             </ul>
             <p class=\"text-muted text-center\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi.</p>
           </div>
           <div class=\"col-xs-12 col-sm-6\">
             <p class=\"text-muted\"><strong>PHOTOSHOP</strong> <span class=\"pull-right\">80%</span></p>
             <div class=\"progress\">
              <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:80%;\"></div>
             </div>
             <p class=\"text-muted\"><strong>SHOOTING PHOTO </strong><span class=\"pull-right\">95%</span></p>
             <div class=\"progress\">
              <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:95%;\"></div>
             </div>
             <p class=\"text-muted\"><strong>FORMATION</strong><span class=\"pull-right\">90%</span></p>
             <div class=\"progress\">
              <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:90%;\"></div>
             </div>
           </div>
        </div>

      <!-- Pricing Tables -->  
        <div class=\"row pricing text-center\">
          <h3>FORMATION PRICING TABLES</h3>
          <hr>
          <div class=\"col-xs-12 col-sm-4 first\">
            <div class=\"beginner\">
              <h4>BEGINNER</h4>
              <h5>\$99.97</h5>
              <ul class=\"nav\">
                <li>Beginner Option I</li>
                <li>Beginner Option II</li>
                <li>Beginner Option III</li>
                <li>Beginner Option IV</li>
                <li>Beginner Option V</li>
              </ul>
              <a href=\"#\" class=\"btn btn-lg sr-button\">SIGN UP</a>
            </div>
          </div>
          <div class=\"col-xs-12 col-sm-4 middle\">
            <div class=\"intermediary\">
              <h4>INTERMEDIARY</h4>
              <h5>\$199.97</h5>
              <ul class=\"nav\">
                <li>Intermediary Option I</li>
                <li>Intermediary Option II</li>
                <li>Intermediary Option III</li>
                <li>Intermediary Option IV</li>
                <li>Intermediary Option V</li>
              </ul>
              <a href=\"#\" class=\"btn btn-lg sr-button\">SIGN UP</a>
            </div>
          </div>
          <div class=\"col-xs-12 col-sm-4\">
            <div class=\"higher\">
              <h4>PROFESSIONAL</h4>
              <h5>\$299.97</h5>
              <ul class=\"nav\">
                <li>High Option I</li>
                <li>High Option II</li>
                <li>High Option III</li>
                <li>High Option IV</li>
                <li>High Option V</li>
              </ul>
              <a href=\"#\" class=\"btn btn-lg sr-button\">SIGN UP</a>
            </div>
          </div>
        </div>
      <!-- End of Pricing Tables -->

      <!-- Clients Feedback -->
        <div class=\"row feedback text-center\">
           <h3>CLIENTS FEEDBACK</h3>
           <hr>
           <div class=\"col-xs-12 col-sm-3\">
             <img class=\"img-responsive\" src=\"images/clients/client1.jpg\" alt=\"client's picture\">
             <h5>MISS BELLA</h5>
             <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</q>
           </div>
           <div class=\"col-xs-12 col-sm-3\">
             <img class=\"img-responsive\" src=\"images/clients/client2.jpg\" alt=\"client's picture\">
             <h5>DON PENO</h5>
             <q>Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi.</q>
           </div>
           <div class=\"col-xs-12 col-sm-3\">
             <img class=\"img-responsive\" src=\"images/clients/client3.jpg\" alt=\"client's picture\">
             <h5>SWEETY</h5>
             <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</q>
           </div>
           <div class=\"col-xs-12 col-sm-3\">
             <img class=\"img-responsive\" src=\"images/clients/client4.jpg\" alt=\"client's picture\">
             <h5>LADY</h5>
             <q>Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi.</q>
           </div>
        </div>
      <!-- End of Clients Feedback --> 
       
      </div>
    <!-- End of container Box -->  
   </div>
<!-- End of principal content -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "page/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title%}About{% endblock %}
{% block body%}
<!-- Principal Content Start-->
   <div id=\"about\">

    <!-- Header -->
      <div class=\"row\">
         <div class=\"col-xs-12 intro\">
            <div class=\"carousel-inner\">
               <div class=\"item active\">
                <img class=\"img-responsive\" src=\"images/about_us.jpg\" alt=\"header picture\">
               </div>
               <div class=\"carousel-caption\">
                  <h1>ABOUT US</h1>
                  <p>About Us and our Services?</p>
                  <hr>
               </div>
            </div>
         </div>
      </div>
    <!-- End of header -->  

    <!-- Container Box -->
      <div class=\"container\">
        <div class=\"row\">
           <div class=\"col-xs-12 col-sm-6\">
             <div class=\"box-about\">
              <i class=\"fa fa-institution fa-2x\"></i>
              <h4>About Our Studio</h4>
              <p class=\"text-left text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi. Minus sequi iste, nam nobis, excepturi.Ut enim ad enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
             </div>
           </div>
           <div class=\"col-xs-12 col-sm-6\">
             <div class=\"box-about\">
              <i class=\"fa fa-group fa-2x\"></i>
              <h4>About Our Team</h4>
              <p class=\"text-left text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi. Minus sequi iste, nam nobis, excepturi.Ut enim ad enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
             </div>
           </div>
        </div>
        <div class=\"row\">
           <div class=\"col-xs-12 col-sm-6 row\">
             <ul class=\"list-inline text-center\">
                <li class=\"line\"></li>
              <li><i class=\"fa fa-tasks fa-2x\"></i></li>
              <li class=\"line\"></li>
              <li><h4>Our Services</h4></li>
              <li class=\"line\"></li>
             </ul>
             <p class=\"text-muted text-center\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi.</p>
           </div>
           <div class=\"col-xs-12 col-sm-6\">
             <p class=\"text-muted\"><strong>PHOTOSHOP</strong> <span class=\"pull-right\">80%</span></p>
             <div class=\"progress\">
              <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:80%;\"></div>
             </div>
             <p class=\"text-muted\"><strong>SHOOTING PHOTO </strong><span class=\"pull-right\">95%</span></p>
             <div class=\"progress\">
              <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:95%;\"></div>
             </div>
             <p class=\"text-muted\"><strong>FORMATION</strong><span class=\"pull-right\">90%</span></p>
             <div class=\"progress\">
              <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:90%;\"></div>
             </div>
           </div>
        </div>

      <!-- Pricing Tables -->  
        <div class=\"row pricing text-center\">
          <h3>FORMATION PRICING TABLES</h3>
          <hr>
          <div class=\"col-xs-12 col-sm-4 first\">
            <div class=\"beginner\">
              <h4>BEGINNER</h4>
              <h5>\$99.97</h5>
              <ul class=\"nav\">
                <li>Beginner Option I</li>
                <li>Beginner Option II</li>
                <li>Beginner Option III</li>
                <li>Beginner Option IV</li>
                <li>Beginner Option V</li>
              </ul>
              <a href=\"#\" class=\"btn btn-lg sr-button\">SIGN UP</a>
            </div>
          </div>
          <div class=\"col-xs-12 col-sm-4 middle\">
            <div class=\"intermediary\">
              <h4>INTERMEDIARY</h4>
              <h5>\$199.97</h5>
              <ul class=\"nav\">
                <li>Intermediary Option I</li>
                <li>Intermediary Option II</li>
                <li>Intermediary Option III</li>
                <li>Intermediary Option IV</li>
                <li>Intermediary Option V</li>
              </ul>
              <a href=\"#\" class=\"btn btn-lg sr-button\">SIGN UP</a>
            </div>
          </div>
          <div class=\"col-xs-12 col-sm-4\">
            <div class=\"higher\">
              <h4>PROFESSIONAL</h4>
              <h5>\$299.97</h5>
              <ul class=\"nav\">
                <li>High Option I</li>
                <li>High Option II</li>
                <li>High Option III</li>
                <li>High Option IV</li>
                <li>High Option V</li>
              </ul>
              <a href=\"#\" class=\"btn btn-lg sr-button\">SIGN UP</a>
            </div>
          </div>
        </div>
      <!-- End of Pricing Tables -->

      <!-- Clients Feedback -->
        <div class=\"row feedback text-center\">
           <h3>CLIENTS FEEDBACK</h3>
           <hr>
           <div class=\"col-xs-12 col-sm-3\">
             <img class=\"img-responsive\" src=\"images/clients/client1.jpg\" alt=\"client's picture\">
             <h5>MISS BELLA</h5>
             <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</q>
           </div>
           <div class=\"col-xs-12 col-sm-3\">
             <img class=\"img-responsive\" src=\"images/clients/client2.jpg\" alt=\"client's picture\">
             <h5>DON PENO</h5>
             <q>Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi.</q>
           </div>
           <div class=\"col-xs-12 col-sm-3\">
             <img class=\"img-responsive\" src=\"images/clients/client3.jpg\" alt=\"client's picture\">
             <h5>SWEETY</h5>
             <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</q>
           </div>
           <div class=\"col-xs-12 col-sm-3\">
             <img class=\"img-responsive\" src=\"images/clients/client4.jpg\" alt=\"client's picture\">
             <h5>LADY</h5>
             <q>Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi.</q>
           </div>
        </div>
      <!-- End of Clients Feedback --> 
       
      </div>
    <!-- End of container Box -->  
   </div>
<!-- End of principal content -->
{% endblock %}", "page/about.html.twig", "/home/alumno/DWES/symfony-blog-esqueleto/templates/page/about.html.twig");
    }
}