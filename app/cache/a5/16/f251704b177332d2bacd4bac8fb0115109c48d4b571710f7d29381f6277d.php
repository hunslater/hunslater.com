<?php

/* @BoltProfiler/toolbar/twig.html.twig */
class __TwigTemplate_a516f251704b177332d2bacd4bac8fb0115109c48d4b571710f7d29381f6277d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "displayInWdt")) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img height=\"28\" alt=\"Twig\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc2QTRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc2QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVCRTZBQjUxNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVCRTZBQjUyNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+YSuGKQAAAWJQTFRFOz09PD09PT4+hISDUlJSkpKT/v7+PkBAQUFBUVBQ8fDwPD4+hYSDv76+oKGhNjc34+Litra1W1pasbCweXl5vby8U1NTt7a2e3t709PTREVFg4KCtLS0OTs74ODgODo6goGBVVVV8PDwv7+/8fHxkZKSd3Z2b25ucHFxMzU1mZqaT09P9vb2hIWEnZyceXh3zs7OlZaXWVpa19fX09PUnqCg29rbp6enT1BPkJGRn6CggoGAwsHB+vr6vLy8wcHBj4+PTU1NoaKieXh4fX18hoSE1dXWTk5NUVFQTk9OUE9PT05O6enpl5iYVVZWe3p5zMzMz87OS0xLtbW1iomJ+/v73dzdMjQ0gX9/0dDQOjw8ODg4UE9Oj42NUlNT6urql5eY8fHwWFlYiIeGUlNShIODrq2tMTIys7KynJ2eS0pJf319srGx3t7ffHx71NTUenp62traT1BQPz8/P0BA////xP9xOwAAAHZ0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AAFiqUcAAADxSURBVHjaYijFAhgoFNRN8ixCARZGegwp5m6S+UhA0kRdgkE7EF2zlggDi2ipsAIzHCgIlyYABXlL/WWZ4EDWpZS1ACQYIc8IB/LWUMGQIA8vd29OMHCMLVUtYFDMKA1VUeLyiU/kAgElnVLLAgYx0VJjcRmbUltxQRCQiQSpZFEuVYvijmGT42AvAQKGPKiZ0gzcQmwCUEEesKAyFkGgmakYgn45pckYgorBpa6YZvKWZqdrZrHJRfODQLg+WNCuNCDTKq1UxYkPBEztSw1FGIoM0IPOt4AhTji3EBmYhTlLMGhIFaMBKQcGGsQ7QIABAMedrCZHnT6FAAAAAElFTkSuQmCC\"/>
            <span> Twig</span>
            <span class=\"sf-toolbar-status\">";
            // line 8
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "templates")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 10
            echo "        ";
            ob_start();
            // line 11
            echo "
            ";
            // line 12
            if ((!twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "chosentemplate")))) {
                // line 13
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Primary template:</b>
                    <span>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "chosentemplate"), "html", null, true);
                echo "
                        ";
                // line 16
                if ((!twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "templateerror")))) {
                    // line 17
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "templateerror"), "html", null, true);
                    echo "
                        ";
                }
                // line 19
                echo "                    </span>
                </div>
            ";
            }
            // line 22
            echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Used templates:</b>
                    <span>
                        ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "templates"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
                // line 27
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
                echo "<br>
                        ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 29
                echo "                            None. (probably cached page)
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                    </span>
            </div>

            ";
            // line 71
            echo "
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 73
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null))));
            // line 74
            echo "    ";
        }
    }

    // line 77
    public function block_menu($context, array $blocks = array())
    {
        // line 78
        echo "    <span class=\"label\">
        <span class=\"icon\">
            <img width=30 src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc2QTRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc2QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVCRTZBQjUxNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVCRTZBQjUyNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+YSuGKQAAAWJQTFRFOz09PD09PT4+hISDUlJSkpKT/v7+PkBAQUFBUVBQ8fDwPD4+hYSDv76+oKGhNjc34+Litra1W1pasbCweXl5vby8U1NTt7a2e3t709PTREVFg4KCtLS0OTs74ODgODo6goGBVVVV8PDwv7+/8fHxkZKSd3Z2b25ucHFxMzU1mZqaT09P9vb2hIWEnZyceXh3zs7OlZaXWVpa19fX09PUnqCg29rbp6enT1BPkJGRn6CggoGAwsHB+vr6vLy8wcHBj4+PTU1NoaKieXh4fX18hoSE1dXWTk5NUVFQTk9OUE9PT05O6enpl5iYVVZWe3p5zMzMz87OS0xLtbW1iomJ+/v73dzdMjQ0gX9/0dDQOjw8ODg4UE9Oj42NUlNT6urql5eY8fHwWFlYiIeGUlNShIODrq2tMTIys7KynJ2eS0pJf319srGx3t7ffHx71NTUenp62traT1BQPz8/P0BA////xP9xOwAAAHZ0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AAFiqUcAAADxSURBVHjaYijFAhgoFNRN8ixCARZGegwp5m6S+UhA0kRdgkE7EF2zlggDi2ipsAIzHCgIlyYABXlL/WWZ4EDWpZS1ACQYIc8IB/LWUMGQIA8vd29OMHCMLVUtYFDMKA1VUeLyiU/kAgElnVLLAgYx0VJjcRmbUltxQRCQiQSpZFEuVYvijmGT42AvAQKGPKiZ0gzcQmwCUEEesKAyFkGgmakYgn45pckYgorBpa6YZvKWZqdrZrHJRfODQLg+WNCuNCDTKq1UxYkPBEztSw1FGIoM0IPOt4AhTji3EBmYhTlLMGhIFaMBKQcGGsQ7QIABAMedrCZHnT6FAAAAAElFTkSuQmCC\" />
        </span>
        <strong>Twig</strong>
        <span class=\"count\">
            <span>";
        // line 84
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "extensions")), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 89
    public function block_panel($context, array $blocks = array())
    {
        // line 90
        echo "    <h2>Twig Templates</h2>
    <table>
        <tr>
            <th>Template</th>
            <th>Parameters</th>
        </tr>
        ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "templates"));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 97
            echo "        <tr>
            <th>
                ";
            // line 99
            if ($this->getAttribute((isset($context["template"]) ? $context["template"] : null), "path", array(), "any", true, true)) {
                // line 100
                echo "                    <a href=\"";
                echo $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["template"]) ? $context["template"] : null), "path"), 1);
                echo "\">
                        ";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "name"), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 104
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
                echo "
                ";
            }
            // line 106
            echo "            </th>
            <td>
                ";
            // line 108
            if ($this->getAttribute((isset($context["template"]) ? $context["template"] : null), "parameters", array(), "any", true, true)) {
                // line 109
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["template"]) ? $context["template"] : null), "parameters"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["parameter"] => $context["metadata"]) {
                    // line 110
                    echo "                        ";
                    if (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "type") == "boolean")) {
                        // line 111
                        echo "                            ";
                        $context["value"] = (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "value")) ? ("true") : ("false"));
                        // line 112
                        echo "                        ";
                    } elseif (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "type") == "string")) {
                        // line 113
                        echo "                            ";
                        $context["maxStrLength"] = 40;
                        // line 114
                        echo "                            ";
                        $context["value"] = $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "value");
                        // line 115
                        echo "                            ";
                        if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null)) > (isset($context["maxStrLength"]) ? $context["maxStrLength"] : null))) {
                            // line 116
                            echo "                                ";
                            $context["value"] = (twig_slice($this->env, (isset($context["value"]) ? $context["value"] : null), 0, (isset($context["maxStrLength"]) ? $context["maxStrLength"] : null)) . "…");
                            // line 117
                            echo "                            ";
                        }
                        // line 118
                        echo "                            ";
                        $context["value"] = (("\"" . (isset($context["value"]) ? $context["value"] : null)) . "\"");
                        // line 119
                        echo "                        ";
                    } else {
                        // line 120
                        echo "                            ";
                        $context["value"] = $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "value");
                        // line 121
                        echo "                        ";
                    }
                    // line 122
                    echo "                        <code>
                            ";
                    // line 123
                    echo twig_escape_filter($this->env, (isset($context["parameter"]) ? $context["parameter"] : null), "html", null, true);
                    echo ": <em style=\"color: #aaa\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "type"), "html", null, true);
                    echo "</em>
                            <span style=\"color: #009E00\">";
                    // line 124
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "</span>
                        </code>
                        ";
                    // line 126
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                        echo "<br />";
                    }
                    // line 127
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['parameter'], $context['metadata'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "                ";
            }
            // line 129
            echo "            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "    </table>
    <br />
    <h2>Twig Extensions</h2>
    <table>
        <tr>
            <th>Extension</th>
            <th>Class</th>
        </tr>
        ";
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "extensions"));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 141
            echo "            <tr>
                <th>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "class"), "html", null, true);
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "    </table>

    <h2>Twig Tests available</h2>
    <table>
        <tr>
            <th>Test</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 155
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "tests"));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 156
            echo "            <tr>
                <th>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : null), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : null), "call"), "html", null, true);
            echo "</code></td>
                <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : null), "extension"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "    </table>

    <h2>Twig Filters available</h2>
    <table>
        <tr>
            <th>Filter</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 171
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "filters"));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 172
            echo "            <tr>
                <th>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "call"), "html", null, true);
            echo "</code></td>
                <td>";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "extension"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "    </table>

    <h2>Twig Functions available</h2>
    <table>
        <tr>
            <th>Function</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 187
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "functions"));
        foreach ($context['_seq'] as $context["_key"] => $context["function"]) {
            // line 188
            echo "            <tr>
                <th>";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["function"]) ? $context["function"] : null), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["function"]) ? $context["function"] : null), "call"), "html", null, true);
            echo "</code></td>
                <td>";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["function"]) ? $context["function"] : null), "extension"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['function'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "@BoltProfiler/toolbar/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 194,  427 => 191,  423 => 190,  419 => 189,  416 => 188,  412 => 187,  401 => 178,  392 => 175,  381 => 172,  366 => 162,  357 => 159,  346 => 156,  322 => 143,  318 => 142,  311 => 140,  301 => 132,  267 => 124,  261 => 123,  252 => 120,  243 => 117,  240 => 116,  231 => 113,  228 => 112,  225 => 111,  198 => 106,  192 => 104,  181 => 100,  179 => 99,  124 => 31,  149 => 56,  142 => 52,  132 => 49,  129 => 71,  107 => 37,  86 => 26,  65 => 15,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 442,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  297 => 200,  280 => 194,  271 => 190,  258 => 122,  251 => 182,  93 => 27,  85 => 23,  77 => 20,  59 => 11,  34 => 5,  31 => 4,  806 => 488,  803 => 487,  792 => 485,  788 => 518,  784 => 482,  771 => 481,  745 => 493,  742 => 492,  723 => 472,  706 => 471,  702 => 479,  698 => 477,  694 => 467,  690 => 466,  686 => 472,  682 => 470,  678 => 468,  675 => 462,  673 => 461,  656 => 460,  645 => 458,  630 => 452,  625 => 450,  621 => 449,  618 => 448,  616 => 440,  602 => 445,  597 => 442,  563 => 429,  545 => 407,  528 => 406,  525 => 405,  523 => 404,  518 => 402,  513 => 400,  202 => 108,  199 => 93,  176 => 86,  173 => 85,  165 => 83,  158 => 80,  136 => 74,  116 => 57,  62 => 16,  28 => 3,  417 => 143,  411 => 140,  407 => 138,  405 => 137,  398 => 136,  395 => 135,  388 => 174,  384 => 173,  382 => 131,  377 => 171,  374 => 128,  368 => 126,  362 => 124,  359 => 123,  350 => 120,  347 => 119,  341 => 117,  338 => 116,  333 => 115,  324 => 112,  313 => 110,  308 => 109,  305 => 108,  262 => 188,  221 => 80,  207 => 76,  186 => 101,  183 => 71,  177 => 69,  161 => 58,  159 => 57,  135 => 46,  133 => 73,  114 => 40,  95 => 27,  38 => 6,  188 => 90,  185 => 75,  174 => 74,  171 => 96,  153 => 57,  138 => 47,  121 => 43,  118 => 49,  113 => 48,  104 => 36,  49 => 11,  27 => 3,  91 => 25,  88 => 24,  63 => 18,  389 => 160,  386 => 159,  378 => 157,  371 => 127,  367 => 155,  361 => 152,  358 => 151,  355 => 150,  353 => 158,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 146,  326 => 138,  315 => 141,  312 => 130,  309 => 129,  302 => 125,  296 => 121,  293 => 129,  290 => 128,  288 => 118,  283 => 115,  281 => 98,  274 => 96,  265 => 105,  255 => 121,  253 => 100,  248 => 97,  241 => 93,  235 => 89,  229 => 87,  227 => 86,  222 => 110,  216 => 79,  213 => 78,  210 => 77,  208 => 76,  203 => 73,  197 => 69,  194 => 68,  191 => 77,  189 => 66,  184 => 63,  178 => 59,  172 => 68,  170 => 84,  166 => 54,  155 => 55,  152 => 84,  144 => 78,  127 => 35,  94 => 21,  82 => 21,  76 => 34,  70 => 19,  67 => 24,  61 => 13,  79 => 21,  72 => 19,  69 => 16,  54 => 13,  45 => 9,  42 => 7,  40 => 11,  37 => 6,  22 => 1,  164 => 70,  162 => 57,  157 => 56,  145 => 74,  139 => 45,  123 => 44,  120 => 38,  111 => 47,  108 => 33,  101 => 30,  80 => 32,  74 => 14,  66 => 11,  60 => 6,  55 => 11,  52 => 12,  43 => 12,  41 => 8,  35 => 5,  32 => 4,  396 => 175,  387 => 172,  383 => 171,  380 => 158,  375 => 169,  373 => 168,  365 => 125,  363 => 153,  356 => 122,  349 => 157,  342 => 155,  335 => 145,  328 => 113,  321 => 135,  314 => 133,  307 => 128,  295 => 119,  289 => 196,  285 => 100,  282 => 113,  276 => 127,  272 => 126,  269 => 107,  263 => 104,  259 => 103,  257 => 101,  254 => 100,  249 => 119,  246 => 118,  237 => 115,  234 => 114,  232 => 89,  223 => 86,  220 => 85,  212 => 79,  209 => 78,  204 => 109,  201 => 74,  196 => 92,  190 => 69,  182 => 87,  180 => 70,  175 => 97,  167 => 63,  163 => 90,  160 => 89,  154 => 54,  150 => 52,  147 => 75,  141 => 77,  137 => 46,  134 => 54,  131 => 42,  128 => 42,  125 => 41,  119 => 39,  115 => 39,  112 => 37,  110 => 36,  106 => 51,  102 => 41,  99 => 27,  96 => 31,  87 => 41,  84 => 40,  81 => 26,  75 => 22,  57 => 15,  53 => 13,  50 => 22,  47 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  122 => 52,  117 => 29,  109 => 52,  105 => 25,  103 => 43,  98 => 45,  92 => 30,  90 => 26,  83 => 25,  78 => 22,  73 => 33,  71 => 29,  68 => 30,  64 => 17,  58 => 15,  56 => 23,  51 => 13,  46 => 10,  44 => 9,  29 => 3,  26 => 3,);
    }
}
