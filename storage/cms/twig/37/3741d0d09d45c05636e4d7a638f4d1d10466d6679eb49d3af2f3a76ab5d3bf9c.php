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

/* C:\xampp\htdocs\october/plugins/watchlearn/movies/components/actorform/default.htm */
class __TwigTemplate_f06b44616fd3337d928cf4950cef8ba6d12bb6b7ad0196d6375d9e43374aea3f extends \Twig\Template
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
        $tags = array("flash" => 27);
        $filters = array("escape" => 28);
        $functions = array("url" => 5, "form_token" => 9, "form_sessionKey" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['flash'],
                ['escape'],
                ['url', 'form_token', 'form_sessionKey']
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
        echo "


<br><br><br>
<form method=\"POST\" action=\"";
        // line 5
        echo url("add-actors");
        echo "\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\">

    <input type=\"hidden\"  name=\"_handler\" value=\"onSave\">

    ";
        // line 9
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    ";
        // line 11
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
        echo "


    <label>Actor name</label> <br>
    <input type=\"text\" name=\"name\"><br><br><br>

    <label>Actor last name</label> <br>
    <input type=\"text\" name=\"lastname\"><br><br><br>

    <label>Actor image</label> <br>
    <input type=\"file\" name=\"actorimage\"><br><br><br>



    <button type=\"submit\">Save actor</button>

    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 27
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 28
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 28, $this->source), "html", null, true);
            echo "</p>
    ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 30
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/plugins/watchlearn/movies/components/actorform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 30,  101 => 28,  99 => 27,  80 => 11,  75 => 9,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


<br><br><br>
<form method=\"POST\" action=\"{{ url('add-actors') }}\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\">

    <input type=\"hidden\"  name=\"_handler\" value=\"onSave\">

    {{form_token() }}

    {{form_sessionKey() }}


    <label>Actor name</label> <br>
    <input type=\"text\" name=\"name\"><br><br><br>

    <label>Actor last name</label> <br>
    <input type=\"text\" name=\"lastname\"><br><br><br>

    <label>Actor image</label> <br>
    <input type=\"file\" name=\"actorimage\"><br><br><br>



    <button type=\"submit\">Save actor</button>

    {% flash success %}
        <p>{{ message }}</p>
    {% endflash %}
</form>", "C:\\xampp\\htdocs\\october/plugins/watchlearn/movies/components/actorform/default.htm", "");
    }
}
