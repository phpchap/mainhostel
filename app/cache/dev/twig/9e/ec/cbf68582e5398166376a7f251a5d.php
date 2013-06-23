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
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  46 => 14,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  361 => 161,  335 => 137,  332 => 136,  324 => 130,  321 => 129,  316 => 126,  311 => 124,  306 => 122,  295 => 110,  289 => 107,  283 => 104,  277 => 101,  271 => 98,  265 => 95,  252 => 84,  249 => 83,  244 => 80,  240 => 77,  237 => 76,  230 => 117,  228 => 83,  225 => 82,  223 => 76,  218 => 73,  215 => 72,  193 => 52,  190 => 51,  178 => 41,  175 => 40,  170 => 35,  165 => 8,  162 => 7,  157 => 169,  155 => 136,  152 => 135,  150 => 129,  146 => 127,  144 => 126,  141 => 125,  139 => 124,  136 => 123,  134 => 122,  131 => 121,  129 => 72,  126 => 71,  124 => 51,  121 => 50,  119 => 40,  113 => 36,  111 => 35,  105 => 32,  101 => 31,  97 => 30,  93 => 29,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  66 => 25,  62 => 24,  58 => 18,  54 => 17,  50 => 15,  42 => 12,  40 => 7,  32 => 6,  166 => 501,  163 => 500,  47 => 386,  44 => 385,  39 => 7,  34 => 4,  31 => 3,);
    }
}
