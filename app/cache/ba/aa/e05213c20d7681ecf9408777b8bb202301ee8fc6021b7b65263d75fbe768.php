<?php

/* edituser.twig */
class __TwigTemplate_baaae05213c20d7681ecf9408777b8bb202301ee8fc6021b7b65263d75fbe768 extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display(array_merge($context, array("active" => "settings")));
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "form_bolt_layout.twig"));
        // line 3
        echo "
<h1>";
        // line 4
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h1>

";
        // line 6
        if ((!twig_test_empty((isset($context["description"]) ? $context["description"] : null)))) {
            // line 7
            echo "<p style=\"max-width: 500px;\">
\t";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "
</p>
";
        }
        // line 11
        echo "
<form action=\"#\" method=\"post\" class=\"form-inline\" role=\"form\" autocomplete=\"off\">
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

    <input type=\"submit\" value=\"";
        // line 15
        echo $this->env->getExtension('Bolt')->trans("Save user");
        echo "\" name=\"submit\" class=\"btn btn-primary\" />
</form>

<br> 

";
        // line 20
        if ((!twig_test_empty((isset($context["note"]) ? $context["note"] : null)))) {
            // line 21
            echo "<p class=\"alert alert-info\" style=\"max-width: 550px;\">
\t<strong>";
            // line 22
            echo $this->env->getExtension('Bolt')->trans("Note:");
            echo "</strong> ";
            echo (isset($context["note"]) ? $context["note"] : null);
            echo "
</p>
";
        }
        // line 25
        echo "
";
        // line 26
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "edituser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  72 => 25,  64 => 22,  61 => 21,  59 => 20,  51 => 15,  46 => 13,  42 => 11,  36 => 8,  33 => 7,  31 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
