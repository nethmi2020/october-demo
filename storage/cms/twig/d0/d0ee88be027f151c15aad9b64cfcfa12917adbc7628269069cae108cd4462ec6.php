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

/* C:\xampp\htdocs\october/themes/olympus/partials/header.htm */
class __TwigTemplate_d467f1badb5095b02e34e77e8379f8ec57dc4c1e4594e3c7bedda5cbc8ab0030 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 19);
        $filters = array("page" => 10, "escape" => 25);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"main-head\">
    <div class=\"container clearfix\">
        <!-- <h1 class=\"logo\">October Movies</h1> -->
      
        <nav  >
            <div class=\"container\">
           <!--  <a class=\"navbar-brand\" href=\"#\">October</a> -->
            <ul class=\"nav navbar-nav pull-xs-right\">
                <li class=\"nav-item";
        // line 9
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "baseFileName", [], "any", false, false, true, 9) == "home")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">Home</a>
                </li>
                <li class=\"nav-item";
        // line 12
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "baseFileName", [], "any", false, false, true, 12) == "movies")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("movies");
        echo "\">Movies</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t <li class=\"nav-item";
        // line 16
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 16), "baseFileName", [], "any", false, false, true, 16) == "login")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 19
        if ( !($context["user"] ?? null)) {
            // line 20
            echo "\t\t\t\t\tLogin
\t\t\t\t\t
\t\t\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t\t
\t\t\t\t\tUser
\t\t\t\t\t<!-- ";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo " -->
\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t\t";
        // line 32
        if (($context["user"] ?? null)) {
            // line 33
            echo "                
                 <li class=\"nav-item";
            // line 34
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 34), "baseFileName", [], "any", false, false, true, 34) == "add-actors")) ? (" active") : (""));
            echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("add-actors");
            echo "\">Actors</a>
\t\t\t\t</li>
             
                ";
        }
        // line 39
        echo "                
                \t";
        // line 40
        if (($context["user"] ?? null)) {
            // line 41
            echo "                <li> <a href=\"#\" data-request=\"onLogout\" data-request-data=\"redirect:'/'\">Logout</a></li>
                ";
        }
        // line 43
        echo "            </ul>
        </div>
        </nav>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/olympus/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 43,  144 => 41,  142 => 40,  139 => 39,  132 => 35,  128 => 34,  125 => 33,  123 => 32,  117 => 28,  111 => 25,  107 => 23,  102 => 20,  100 => 19,  95 => 17,  91 => 16,  85 => 13,  81 => 12,  76 => 10,  72 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"main-head\">
    <div class=\"container clearfix\">
        <!-- <h1 class=\"logo\">October Movies</h1> -->
      
        <nav  >
            <div class=\"container\">
           <!--  <a class=\"navbar-brand\" href=\"#\">October</a> -->
            <ul class=\"nav navbar-nav pull-xs-right\">
                <li class=\"nav-item{{ this.page.baseFileName == 'home' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'homepage'|page }}\">Home</a>
                </li>
                <li class=\"nav-item{{ this.page.baseFileName == 'movies' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'movies'|page }}\">Movies</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t <li class=\"nav-item{{ this.page.baseFileName == 'login' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'login'|page }}\">
\t\t\t\t\t
\t\t\t\t\t{% if not user %}
\t\t\t\t\tLogin
\t\t\t\t\t
\t\t\t\t\t{% else %}
\t\t\t\t\t
\t\t\t\t\tUser
\t\t\t\t\t<!-- {{user.name}} -->
\t\t\t\t\t
\t\t\t\t\t{% endif%}
\t\t\t\t\t
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t\t{% if  user%}
                
                 <li class=\"nav-item{{ this.page.baseFileName == 'add-actors' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'add-actors'|page }}\">Actors</a>
\t\t\t\t</li>
             
                {% endif %}
                
                \t{% if  user%}
                <li> <a href=\"#\" data-request=\"onLogout\" data-request-data=\"redirect:'/'\">Logout</a></li>
                {% endif %}
            </ul>
        </div>
        </nav>
    </div>
</header>", "C:\\xampp\\htdocs\\october/themes/olympus/partials/header.htm", "");
    }
}
