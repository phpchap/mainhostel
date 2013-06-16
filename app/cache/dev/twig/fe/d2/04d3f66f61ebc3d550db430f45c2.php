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
        return array (  70 => 26,  66 => 25,  62 => 24,  50 => 15,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  19 => 1,  504 => 265,  478 => 241,  475 => 240,  459 => 231,  451 => 225,  448 => 224,  440 => 212,  437 => 211,  419 => 158,  412 => 153,  409 => 152,  400 => 217,  398 => 211,  357 => 172,  355 => 152,  348 => 147,  345 => 146,  340 => 144,  335 => 142,  330 => 140,  316 => 125,  307 => 119,  298 => 113,  289 => 107,  280 => 101,  271 => 95,  258 => 84,  255 => 83,  247 => 77,  244 => 76,  237 => 135,  235 => 83,  232 => 82,  230 => 76,  225 => 73,  222 => 72,  200 => 52,  197 => 51,  185 => 41,  182 => 40,  177 => 35,  172 => 8,  169 => 7,  164 => 273,  162 => 240,  159 => 239,  157 => 224,  154 => 223,  152 => 146,  149 => 145,  147 => 144,  144 => 143,  142 => 142,  139 => 141,  137 => 140,  134 => 139,  132 => 72,  129 => 71,  127 => 51,  124 => 50,  122 => 40,  116 => 36,  114 => 35,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  91 => 35,  87 => 26,  83 => 30,  79 => 29,  75 => 28,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  45 => 10,  35 => 1,  46 => 14,  43 => 7,  38 => 7,  33 => 4,  30 => 5,);
    }
}
