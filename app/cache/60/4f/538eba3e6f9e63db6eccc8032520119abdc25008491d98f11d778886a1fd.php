<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_604f538eba3e6f9e63db6eccc8032520119abdc25008491d98f11d778886a1fd extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  70 => 26,  50 => 15,  46 => 14,  297 => 51,  294 => 50,  282 => 49,  267 => 44,  247 => 40,  232 => 37,  229 => 36,  226 => 35,  185 => 31,  169 => 28,  166 => 27,  138 => 22,  127 => 18,  124 => 17,  96 => 12,  94 => 11,  90 => 10,  76 => 9,  63 => 6,  61 => 5,  40 => 48,  37 => 39,  31 => 30,  25 => 14,  22 => 8,  155 => 26,  141 => 23,  135 => 21,  125 => 34,  101 => 28,  86 => 25,  83 => 30,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  59 => 16,  57 => 4,  54 => 14,  48 => 12,  42 => 12,  35 => 8,  30 => 5,  26 => 3,  289 => 108,  284 => 105,  270 => 101,  268 => 100,  261 => 42,  258 => 41,  254 => 97,  250 => 95,  245 => 92,  228 => 88,  223 => 34,  218 => 85,  212 => 33,  210 => 82,  205 => 81,  199 => 80,  196 => 79,  179 => 78,  171 => 75,  161 => 68,  152 => 61,  145 => 52,  140 => 50,  132 => 20,  128 => 44,  121 => 16,  113 => 34,  92 => 26,  87 => 28,  81 => 26,  79 => 29,  67 => 23,  64 => 22,  47 => 21,  28 => 25,  24 => 2,  291 => 104,  280 => 96,  274 => 93,  269 => 91,  264 => 89,  257 => 85,  253 => 84,  242 => 75,  227 => 73,  222 => 70,  207 => 68,  203 => 67,  201 => 66,  198 => 65,  181 => 64,  174 => 76,  168 => 57,  164 => 56,  159 => 43,  157 => 52,  154 => 51,  137 => 50,  133 => 48,  129 => 19,  123 => 45,  117 => 32,  112 => 41,  109 => 15,  105 => 39,  102 => 38,  97 => 31,  91 => 35,  85 => 31,  80 => 23,  77 => 22,  73 => 24,  66 => 25,  62 => 24,  60 => 21,  56 => 19,  51 => 13,  45 => 3,  43 => 13,  39 => 9,  34 => 32,  32 => 6,  27 => 6,  21 => 2,  19 => 1,);
    }
}
