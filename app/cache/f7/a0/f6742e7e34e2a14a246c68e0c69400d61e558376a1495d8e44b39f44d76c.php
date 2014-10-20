<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_f7a0f6742e7e34e2a14a246c68e0c69400d61e558376a1495d8e44b39f44d76c extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : null))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  70 => 26,  50 => 15,  46 => 14,  297 => 51,  294 => 50,  282 => 49,  267 => 44,  247 => 40,  232 => 37,  229 => 36,  226 => 35,  185 => 31,  169 => 28,  166 => 27,  138 => 22,  127 => 18,  124 => 17,  96 => 12,  94 => 11,  90 => 10,  76 => 9,  63 => 6,  61 => 5,  40 => 48,  37 => 39,  31 => 30,  25 => 14,  22 => 8,  155 => 26,  141 => 23,  135 => 21,  125 => 34,  101 => 28,  86 => 25,  83 => 30,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  59 => 16,  57 => 4,  54 => 14,  48 => 12,  42 => 12,  35 => 8,  30 => 5,  26 => 3,  289 => 108,  284 => 105,  270 => 101,  268 => 100,  261 => 42,  258 => 41,  254 => 97,  250 => 95,  245 => 92,  228 => 88,  223 => 34,  218 => 85,  212 => 33,  210 => 82,  205 => 81,  199 => 80,  196 => 79,  179 => 78,  171 => 75,  161 => 68,  152 => 61,  145 => 52,  140 => 50,  132 => 20,  128 => 44,  121 => 16,  113 => 34,  92 => 26,  87 => 28,  81 => 26,  79 => 29,  67 => 23,  64 => 22,  47 => 21,  28 => 25,  24 => 2,  291 => 104,  280 => 96,  274 => 93,  269 => 91,  264 => 89,  257 => 85,  253 => 84,  242 => 75,  227 => 73,  222 => 70,  207 => 68,  203 => 67,  201 => 66,  198 => 65,  181 => 64,  174 => 76,  168 => 57,  164 => 56,  159 => 43,  157 => 52,  154 => 51,  137 => 50,  133 => 48,  129 => 19,  123 => 45,  117 => 32,  112 => 41,  109 => 15,  105 => 39,  102 => 38,  97 => 31,  91 => 35,  85 => 31,  80 => 23,  77 => 22,  73 => 24,  66 => 25,  62 => 24,  60 => 21,  56 => 19,  51 => 13,  45 => 3,  43 => 13,  39 => 9,  34 => 32,  32 => 6,  27 => 6,  21 => 2,  19 => 1,);
    }
}
