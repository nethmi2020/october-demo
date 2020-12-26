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

/* C:\xampp\htdocs\october/themes/olympus/pages/homepage.htm */
class __TwigTemplate_383bd00115e9adabc4f583d44e8166e354815d75f12796aa34c55f360cbf230b extends \Twig\Template
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
        $tags = array("if" => 9, "component" => 21);
        $filters = array("escape" => 2);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'component'],
                ['escape'],
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
        echo "<h1> 
Welcome ";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo " <br>
This is our home page!!
</h1>




";
        // line 9
        if ( !($context["user"] ?? null)) {
            // line 10
            echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        } else {
            // line 13
            echo "\t\t\t\t\t
                    <h3>Profile Details</h3>
                    <ul>
                        <li>";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</li>
                        <li>";
            // line 17
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</li>
                    </ul> <br><br><br>
                    ";
        }
        // line 20
        echo "\t\t\t\t\t
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel velit optio eos. Voluptatem nulla excepturi, numquam eaque reprehenderit, doloribus architecto amet deserunt autem consequuntur aspernatur odit dolores est porro accusamus eos labore rem quidem iure explicabo? Iusto, quas dolores. Commodi!</p>";
        // line 21
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/olympus/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 21,  97 => 20,  91 => 17,  87 => 16,  82 => 13,  77 => 10,  75 => 9,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1> 
Welcome {{user.name}} <br>
This is our home page!!
</h1>




{% if not user %}
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t{% else %}
\t\t\t\t\t
                    <h3>Profile Details</h3>
                    <ul>
                        <li>{{user.name}}</li>
                        <li>{{user.email}}</li>
                    </ul> <br><br><br>
                    {% endif %}
\t\t\t\t\t
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel velit optio eos. Voluptatem nulla excepturi, numquam eaque reprehenderit, doloribus architecto amet deserunt autem consequuntur aspernatur odit dolores est porro accusamus eos labore rem quidem iure explicabo? Iusto, quas dolores. Commodi!</p>{% component 'blogPosts' %}", "C:\\xampp\\htdocs\\october/themes/olympus/pages/homepage.htm", "");
    }
}
