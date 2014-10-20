<?php

/* _sub_pretty.twig */
class __TwigTemplate_59afe3cb405fb7e7e0c3aac7c9f2d861f5f89c71dcb930bbceb5ae2d6ec8ecdd extends Twig_Template
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
        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 14
        echo "
";
        // line 25
        echo "
";
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 39
        echo "
";
        // line 48
        echo "
";
    }

    // line 3
    public function getuserlink($_user = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $_user,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 4
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useredit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"))), "html", null, true);
            echo "\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname"), "html", null, true);
            // line 6
            echo "</a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getcontentlink_by_id($_contenttype = null, $_title = null, $_content_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $_contenttype,
            "title" => $_title,
            "content_id" => $_content_id,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 10
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug"), "id" => (isset($context["content_id"]) ? $context["content_id"] : null))), "html", null, true);
            echo "\">";
            // line 11
            echo $this->env->getExtension('Bolt')->trim((isset($context["title"]) ? $context["title"] : null), 70);
            // line 12
            echo "</a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getcontentlink($_contenttype = null, $_content = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $_contenttype,
            "content" => $_content,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    ";
            $context["crosslinks"] = $this;
            // line 17
            echo "
    ";
            // line 18
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array(), "any", true, true)) {
                // line 19
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title");
                // line 20
                echo "    ";
            } else {
                // line 21
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "name");
                // line 22
                echo "    ";
            }
            // line 23
            echo "    ";
            echo $context["crosslinks"]->getcontentlink_by_id((isset($context["contenttype"]) ? $context["contenttype"] : null), (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 26
    public function getchangelogmutation($_raw = null)
    {
        $context = $this->env->mergeGlobals(array(
            "raw" => $_raw,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 27
            echo "    ";
            $context["mapping"] = array("UPDATE" => "changed", "INSERT" => "created", "DELETE" => "deleted", "HOLD" => "put on hold", "PUBLISH" => "published", "DRAFT" => "depublished");
            // line 28
            echo "    ";
            if ($this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : null), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : null), array(), "array"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["raw"]) ? $context["raw"] : null), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 31
    public function getdatetime($_d = null)
    {
        $context = $this->env->mergeGlobals(array(
            "d" => $_d,
        ));

        $blocks = array();

        ob_start();
        try {
            echo "<time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "html", null, true);
            echo "</time>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function gettypepopover($_types = null)
    {
        $context = $this->env->mergeGlobals(array(
            "types" => $_types,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            $context["types"] = ((array_key_exists("types", $context)) ? (_twig_default_filter((isset($context["types"]) ? $context["types"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/accept_file_types"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/accept_file_types"), "method")));
            // line 35
            echo "    ";
            $context["text"] = ((($this->env->getExtension('Bolt')->trans("Allowed filetypes are:") . "<code>") . twig_join_filter((isset($context["types"]) ? $context["types"] : null), "</code>, <code>")) . "</code>.");
            // line 36
            echo "    <span class=\"label info-pop\" data-title=\"\"
      data-html=\"true\" data-content=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Types");
            echo "</span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 40
    public function getstackbutton($_file = null)
    {
        $context = $this->env->mergeGlobals(array(
            "file" => $_file,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 41
            echo "    ";
            if ((!$this->env->getExtension('Bolt')->stacked($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "newpath")))) {
                // line 42
                echo "    <a href=\"#\" class=\"btn btn-mini\" data-action=\"stack.addToStack('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "newpath"), "html", null, true);
                echo "', this);\">
        <i class=\"icon-paper-clip\"></i>
        ";
                // line 44
                echo $this->env->getExtension('Bolt')->trans("Place on stack");
                echo "
    </a>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function getdatepickervalue($_date = null)
    {
        $context = $this->env->mergeGlobals(array(
            "date" => $_date,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 50
            echo "    ";
            if (((isset($context["date"]) ? $context["date"] : null) > "1970-01-01 01:01:01")) {
                // line 51
                echo "       ";
                echo twig_escape_filter($this->env, (((twig_capitalize_string_filter($this->env, $this->env->getExtension('Bolt')->localedatetime((isset($context["date"]) ? $context["date"] : null), "%A")) . twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), ", d")) . $this->env->getExtension('Bolt')->localedatetime((isset($context["date"]) ? $context["date"] : null), " %B")) . twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), " Y")), "html", null, true);
                echo "
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_sub_pretty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 51,  294 => 50,  282 => 49,  267 => 44,  247 => 40,  232 => 37,  229 => 36,  226 => 35,  185 => 31,  169 => 28,  166 => 27,  138 => 22,  127 => 18,  124 => 17,  96 => 12,  94 => 11,  90 => 10,  76 => 9,  63 => 6,  61 => 5,  40 => 48,  37 => 39,  31 => 30,  25 => 14,  22 => 8,  155 => 26,  141 => 23,  135 => 21,  125 => 34,  101 => 28,  86 => 25,  83 => 24,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  59 => 16,  57 => 4,  54 => 14,  48 => 12,  42 => 10,  35 => 8,  30 => 6,  26 => 4,  289 => 108,  284 => 105,  270 => 101,  268 => 100,  261 => 42,  258 => 41,  254 => 97,  250 => 95,  245 => 92,  228 => 88,  223 => 34,  218 => 85,  212 => 33,  210 => 82,  205 => 81,  199 => 80,  196 => 79,  179 => 78,  171 => 75,  161 => 68,  152 => 61,  145 => 52,  140 => 50,  132 => 20,  128 => 44,  121 => 16,  113 => 34,  92 => 26,  87 => 28,  81 => 26,  79 => 25,  67 => 23,  64 => 22,  47 => 21,  28 => 25,  24 => 3,  291 => 104,  280 => 96,  274 => 93,  269 => 91,  264 => 89,  257 => 85,  253 => 84,  242 => 75,  227 => 73,  222 => 70,  207 => 68,  203 => 67,  201 => 66,  198 => 65,  181 => 64,  174 => 76,  168 => 57,  164 => 56,  159 => 43,  157 => 52,  154 => 51,  137 => 50,  133 => 48,  129 => 19,  123 => 45,  117 => 32,  112 => 41,  109 => 15,  105 => 39,  102 => 38,  97 => 31,  91 => 34,  85 => 31,  80 => 23,  77 => 22,  73 => 24,  66 => 24,  62 => 17,  60 => 21,  56 => 19,  51 => 13,  45 => 3,  43 => 13,  39 => 9,  34 => 32,  32 => 8,  27 => 6,  21 => 2,  19 => 2,);
    }
}
