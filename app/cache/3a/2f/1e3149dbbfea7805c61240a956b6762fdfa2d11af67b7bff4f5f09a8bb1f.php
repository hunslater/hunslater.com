<?php

/* _footer.twig */
class __TwigTemplate_3a2f1e3149dbbfea7805c61240a956b6762fdfa2d11af67b7bff4f5f09a8bb1f extends Twig_Template
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
        echo "
<!-- Footer -->
        <footer class=\"large-12 columns\">
            <hr />
            <div class=\"large-6 columns\">
                <p>";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.", array("%url%" => "http://bolt.cm"));
        echo "
                </p>
            </div>
            <div class=\"large-6 columns\">
                <ul class=\"inline-list\">
                    ";
        // line 11
        echo $this->env->getExtension('Bolt')->menu($this->env);
        echo "
                </ul>
            </div>
        </footer>
    </div>
</div>

    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "javascripts/jquery-2.1.0.min.js\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "javascripts/foundation.min.js\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "javascripts/modernizr.js\"></script>

    ";
        // line 24
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.pack.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.css\">

    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "javascripts/app.js\"></script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 27,  57 => 24,  44 => 18,  123 => 50,  120 => 49,  96 => 44,  88 => 41,  85 => 40,  75 => 37,  70 => 26,  64 => 23,  56 => 20,  48 => 19,  43 => 15,  36 => 13,  33 => 12,  29 => 6,  23 => 3,  116 => 9,  113 => 8,  106 => 5,  99 => 4,  91 => 42,  74 => 2,  62 => 25,  39 => 14,  135 => 67,  133 => 10,  128 => 65,  122 => 62,  119 => 61,  110 => 51,  107 => 50,  89 => 39,  82 => 39,  76 => 26,  71 => 23,  60 => 16,  45 => 13,  42 => 19,  34 => 11,  26 => 6,  22 => 17,  206 => 94,  199 => 89,  196 => 88,  187 => 80,  184 => 79,  171 => 72,  164 => 70,  161 => 69,  154 => 14,  150 => 12,  147 => 63,  145 => 62,  141 => 69,  136 => 54,  132 => 58,  127 => 52,  121 => 48,  115 => 45,  111 => 47,  108 => 43,  104 => 41,  101 => 45,  95 => 36,  93 => 35,  90 => 34,  84 => 32,  78 => 38,  72 => 28,  69 => 27,  66 => 22,  59 => 21,  55 => 15,  52 => 20,  50 => 14,  47 => 17,  41 => 15,  38 => 14,  35 => 13,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
