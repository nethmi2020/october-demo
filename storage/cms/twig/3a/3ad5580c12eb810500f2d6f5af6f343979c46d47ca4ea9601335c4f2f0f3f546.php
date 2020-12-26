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

/* C:\xampp\htdocs\october/themes/olympus/pages/movie-single.htm */
class __TwigTemplate_eb75b4009be9babc652e4c3f9b8d05a9bf0ed4a8fd88dbb9eef8c8534266d86b extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 6, "for" => 15);
        $filters = array("escape" => 7, "raw" => 12, "page" => 37);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'raw', 'page'],
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, true, 3);
        // line 4
        echo "

";
        // line 6
        if (($context["record"] ?? null)) {
            // line 7
            echo "    <h2>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "</h2>
<img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", [], "any", false, false, true, 8), "thumb", [0 => 200, 1 => ($context["auto"] ?? null)], "method", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\" alt=\"\">
    
    <h4>";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "year", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</h4>
    <h3>description</h3>
    ";
            // line 12
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 12), 12, $this->source);
            echo "

    <h3>Actors</h3>
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "actors", [], "any", false, false, true, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 16
                echo "
    ";
                // line 17
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["actor"], "name", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["actor"], "lastname", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo " <br>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "

    <h3>Galley</h3>
   <ul class=\"gallery clearfix\" style=\"display:inline-block;\">
       ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "movie_gallery", [], "any", false, false, true, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 25
                echo "
      <li style=\"display:inline-block; justify-content:space-around;\" >
        <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "\">
       <img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 80, 1 => 80, 2 => ["mode" => "crop"]], "method", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "\" alt=\"\"> </a>
      </li> 

       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
   </ul> 
   
   <h3>Generes</h3>
   ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "generes", [], "any", false, false, true, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["genere"]) {
                // line 37
                echo "  <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("generes", ["slug" => twig_get_attribute($this->env, $this->source, $context["genere"], "genere_title", [], "any", false, false, true, 37)]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["genere"], "genere_title", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "</a> <br>
  
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genere'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
";
        } else {
            // line 42
            echo "    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["notFoundMessage"] ?? null), 42, $this->source), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/olympus/pages/movie-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 42,  163 => 40,  151 => 37,  147 => 36,  141 => 32,  131 => 28,  127 => 27,  123 => 25,  119 => 24,  113 => 20,  102 => 17,  99 => 16,  95 => 15,  89 => 12,  84 => 10,  79 => 8,  74 => 7,  72 => 6,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}


{% if record %}
    <h2>{{record.name}}</h2>
<img src=\"{{record.poster.thumb(200,auto)}}\" alt=\"\">
    
    <h4>{{record.year}}</h4>
    <h3>description</h3>
    {{record.description|raw}}

    <h3>Actors</h3>
    {% for actor in record.actors %}

    {{actor.name}} {{actor.lastname}} <br>

    {% endfor %}


    <h3>Galley</h3>
   <ul class=\"gallery clearfix\" style=\"display:inline-block;\">
       {% for image in record.movie_gallery %}

      <li style=\"display:inline-block; justify-content:space-around;\" >
        <a href=\"{{image.path}}\">
       <img src=\"{{image.thumb(80,80,{'mode':'crop'})}}\" alt=\"\"> </a>
      </li> 

       {% endfor %}

   </ul> 
   
   <h3>Generes</h3>
   {% for genere in record.generes %}
  <a href=\"{{'generes'|page({slug:genere.genere_title})}}\">{{genere.genere_title}}</a> <br>
  
       {% endfor %}

{% else %}
    {{ notFoundMessage }}
{% endif %}", "C:\\xampp\\htdocs\\october/themes/olympus/pages/movie-single.htm", "");
    }
}
