<?php

/* dashboard-activity.twig */
class __TwigTemplate_f38faf6acb6539306493a5eaa98495dd56e403f70916cb80b84de00c9d4ff704 extends Twig_Template
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
        $context["pretty"] = $this->env->loadTemplate("_sub_pretty.twig");
        // line 2
        echo "
";
        // line 3
        if ($this->env->getExtension('Bolt')->isAllowed("activitylog")) {
            // line 4
            echo "
    <section class=\"news\">
        <h2>";
            // line 6
            echo $this->env->getExtension('Bolt')->trans("Latest activity");
            echo "</h2>
        <ul class='activity'>
        ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activity"]) ? $context["activity"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 9
                echo "            ";
                if ($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "username"), array(), "any", true, true)) {
                    // line 10
                    echo "                ";
                    $context["userlink"] = $context["pretty"]->getuserlink($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "username")));
                    // line 11
                    echo "            ";
                } else {
                    // line 12
                    echo "                ";
                    $context["userlink"] = $this->env->getExtension('Bolt')->trans("unknown");
                    // line 13
                    echo "            ";
                }
                // line 14
                echo "            <li>
                ";
                // line 15
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "save content")) {
                    // line 16
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => "contenttypes"), "method", false, true), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "contenttype"), array(), "array", true, true)) {
                        // line 17
                        echo "                        ";
                        $context["contenttype"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "contenttypes"), "method"), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "contenttype"), array(), "array");
                        // line 18
                        echo "                        ";
                        $context["contenttype_display_name"] = $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name");
                        // line 19
                        echo "                        ";
                        $context["content_display_name"] = $context["pretty"]->getcontentlink_by_id((isset($context["contenttype"]) ? $context["contenttype"] : null), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "content_id"));
                        // line 20
                        echo "                    ";
                    } else {
                        // line 21
                        echo "                        ";
                        $context["contenttype_display_name"] = $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "contenttype");
                        // line 22
                        echo "                        ";
                        $context["content_display_name"] = $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message");
                        // line 23
                        echo "                    ";
                    }
                    // line 24
                    echo "
                    ";
                    // line 25
                    echo $this->env->getExtension('Bolt')->trans("Saved");
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["contenttype_display_name"]) ? $context["contenttype_display_name"] : null), "html", null, true);
                    echo "
                    \"<strong>";
                    // line 26
                    echo twig_escape_filter($this->env, (isset($context["content_display_name"]) ? $context["content_display_name"] : null), "html", null, true);
                    echo "</strong>\" ";
                    echo $this->env->getExtension('Bolt')->trans("by");
                    echo " <em>";
                    echo twig_escape_filter($this->env, (isset($context["userlink"]) ? $context["userlink"] : null), "html", null, true);
                    echo "</em>
                ";
                } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "login")) {
                    // line 28
                    echo "                    <em>";
                    echo twig_escape_filter($this->env, (isset($context["userlink"]) ? $context["userlink"] : null), "html", null, true);
                    echo "</em> ";
                    echo $this->env->getExtension('Bolt')->trans("logged in");
                    echo "
                ";
                } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "logout")) {
                    // line 30
                    echo "                    <em>";
                    echo twig_escape_filter($this->env, (isset($context["userlink"]) ? $context["userlink"] : null), "html", null, true);
                    echo "</em> ";
                    echo $this->env->getExtension('Bolt')->trans("logged out");
                    echo "
                ";
                } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "fixme")) {
                    // line 32
                    echo "                    <b>";
                    echo $this->env->getExtension('Bolt')->trans("Fixme:");
                    echo "</b> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
                    echo "
                ";
                } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "user")) {
                    // line 34
                    echo "                    <b>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
                    echo "</b> ";
                    echo $this->env->getExtension('Bolt')->trans("by");
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["userlink"]) ? $context["userlink"] : null), "html", null, true);
                    echo "
                ";
                } else {
                    // line 36
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
                    echo "
                ";
                }
                // line 38
                echo "                <small>(<time class=\"moment\" datetime=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "date"), "c"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "date"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "date"), "html", null, true);
                echo "</time>)</small>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </ul>

        <p>&nbsp;<a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("activitylog");
            echo "\" class=\"morelink\">";
            echo $this->env->getExtension('Bolt')->trans("more activity");
            echo " »</a></p>

    </section>

";
        }
    }

    public function getTemplateName()
    {
        return "dashboard-activity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 41,  141 => 38,  135 => 36,  125 => 34,  101 => 28,  86 => 25,  83 => 24,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  59 => 16,  57 => 15,  54 => 14,  48 => 12,  42 => 10,  35 => 8,  30 => 6,  26 => 4,  289 => 108,  284 => 105,  270 => 101,  268 => 100,  261 => 99,  258 => 98,  254 => 97,  250 => 95,  245 => 92,  228 => 88,  223 => 86,  218 => 85,  212 => 83,  210 => 82,  205 => 81,  199 => 80,  196 => 79,  179 => 78,  171 => 75,  161 => 68,  152 => 61,  145 => 52,  140 => 50,  132 => 45,  128 => 44,  121 => 40,  113 => 34,  92 => 26,  87 => 28,  81 => 26,  79 => 25,  67 => 23,  64 => 22,  47 => 21,  28 => 5,  24 => 3,  291 => 104,  280 => 96,  274 => 93,  269 => 91,  264 => 89,  257 => 85,  253 => 84,  242 => 75,  227 => 73,  222 => 70,  207 => 68,  203 => 67,  201 => 66,  198 => 65,  181 => 64,  174 => 76,  168 => 57,  164 => 56,  159 => 43,  157 => 52,  154 => 51,  137 => 50,  133 => 48,  129 => 46,  123 => 45,  117 => 32,  112 => 41,  109 => 30,  105 => 39,  102 => 38,  97 => 31,  91 => 34,  85 => 31,  80 => 23,  77 => 22,  73 => 24,  66 => 24,  62 => 17,  60 => 21,  56 => 19,  51 => 13,  45 => 11,  43 => 13,  39 => 9,  34 => 9,  32 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
