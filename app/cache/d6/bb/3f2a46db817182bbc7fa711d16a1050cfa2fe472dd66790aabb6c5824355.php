<?php

/* _header.twig */
class __TwigTemplate_d6bb3f2a46db817182bbc7fa711d16a1050cfa2fe472dd66790aabb6c5824355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("_header_basic.twig")->display($context);
        // line 2
        echo "
";
        // line 3
        if ((!array_key_exists("active", $context))) {
            $context["active"] = "dashboard";
        }
        // line 4
        echo "
<div class=\"navbar navbar-fixed-top \">
    <div class=\"navbar-bolt navbar-inverse\">
        <div class=\"container\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
                <strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/name"), "method"), "html", null, true);
        echo "</strong> <span class=\"hidden-phone\"> ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/sitename"), "method")) {
            echo "- ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        }
        echo "</span>
            </a>

            ";
        // line 15
        $this->env->loadTemplate("_sub_mainmenu.twig")->display($context);
        // line 16
        echo "
        </div>
    </div>
</div>

<div class=\"container-fluid\">

";
        // line 23
        $this->env->loadTemplate("_messages.twig")->display($context);
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  63 => 23,  54 => 16,  52 => 15,  41 => 12,  37 => 11,  28 => 4,  24 => 3,  75 => 26,  72 => 25,  64 => 22,  61 => 21,  59 => 20,  51 => 15,  46 => 13,  42 => 11,  36 => 8,  33 => 7,  31 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
