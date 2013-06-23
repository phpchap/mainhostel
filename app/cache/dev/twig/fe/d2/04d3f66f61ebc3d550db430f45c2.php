<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_fed204d3f66f61ebc3d550db430f45c2 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
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
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  46 => 14,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  361 => 161,  335 => 137,  332 => 136,  324 => 130,  321 => 129,  316 => 126,  311 => 124,  306 => 122,  295 => 110,  289 => 107,  283 => 104,  277 => 101,  271 => 98,  265 => 95,  252 => 84,  249 => 83,  244 => 80,  240 => 77,  237 => 76,  230 => 117,  228 => 83,  225 => 82,  223 => 76,  218 => 73,  215 => 72,  193 => 52,  190 => 51,  178 => 41,  175 => 40,  170 => 35,  165 => 8,  162 => 7,  157 => 169,  155 => 136,  152 => 135,  150 => 129,  146 => 127,  144 => 126,  141 => 125,  139 => 124,  136 => 123,  134 => 122,  131 => 121,  129 => 72,  126 => 71,  124 => 51,  121 => 50,  119 => 40,  113 => 36,  111 => 35,  105 => 32,  101 => 31,  97 => 30,  93 => 29,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  66 => 25,  62 => 24,  58 => 18,  54 => 17,  50 => 15,  42 => 12,  40 => 7,  32 => 6,  166 => 501,  163 => 500,  47 => 386,  44 => 385,  39 => 7,  34 => 4,  31 => 3,);
    }
}
