<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_9eeccbf68582e5398166376a7f251a5d extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
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
        return array (  70 => 26,  66 => 25,  62 => 24,  50 => 15,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  19 => 1,  504 => 265,  478 => 241,  475 => 240,  459 => 231,  451 => 225,  448 => 224,  440 => 212,  437 => 211,  419 => 158,  412 => 153,  409 => 152,  400 => 217,  398 => 211,  357 => 172,  355 => 152,  348 => 147,  345 => 146,  340 => 144,  335 => 142,  330 => 140,  316 => 125,  307 => 119,  298 => 113,  289 => 107,  280 => 101,  271 => 95,  258 => 84,  255 => 83,  247 => 77,  244 => 76,  237 => 135,  235 => 83,  232 => 82,  230 => 76,  225 => 73,  222 => 72,  200 => 52,  197 => 51,  185 => 41,  182 => 40,  177 => 35,  172 => 8,  169 => 7,  164 => 273,  162 => 240,  159 => 239,  157 => 224,  154 => 223,  152 => 146,  149 => 145,  147 => 144,  144 => 143,  142 => 142,  139 => 141,  137 => 140,  134 => 139,  132 => 72,  129 => 71,  127 => 51,  124 => 50,  122 => 40,  116 => 36,  114 => 35,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  91 => 35,  87 => 26,  83 => 30,  79 => 29,  75 => 28,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  45 => 10,  35 => 1,  46 => 14,  43 => 7,  38 => 7,  33 => 4,  30 => 5,);
    }
}
