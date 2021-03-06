<?php

/* AtlasFrontEndBundle:Page:home.html.twig */
class __TwigTemplate_ee5bc44a463f548c703c72e498da02de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'before_head' => array($this, 'block_before_head'),
            'slider' => array($this, 'block_slider'),
            'content_part' => array($this, 'block_content_part'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_before_head($context, array $blocks = array())
    {
        // line 4
        echo "    <script type=\"text/javascript\"> var bookNowWidth = 610; function bookNowApp(e){var t=document.createElement(\"img\");t.style.cursor=\"pointer\";t.src=\"https://myallocator.com/images/booknow/close_button.png\";t.style.zIndex=52;t.style.position=\"absolute\";t.style.left=\"50%\";document.getElementsByTagName(\"body\")[0].appendChild(t);var n=document.createElement(\"div\");n.style.position=\"fixed\";n.style.top=\"0px\";n.style.left=\"0px\";n.style.overflow=\"hidden\";n.style.display=\"none\";n.style.width=\"100%\";n.style.height=\"100%\";n.style.opacity=.7;n.style.MozOpacity=.7;n.style.filter=\"alpha(opacity=70)\";n.style.zIndex=50;n.style.display=\"block\";n.style.backgroundColor=\"#000000\";document.getElementsByTagName(\"body\")[0].appendChild(n);var r=document.createElement(\"iframe\");r.style.width=bookNowWidth+\"px\";r.style.height=\"100%\";r.style.border=\"none\";r.a=\"true\";r.style.position=\"absolute\";r.style.left=\"50%\";r.style.top=\"50px\";r.style.marginLeft=-(bookNowWidth/2)+\"px\";r.allowTransparency=\"true\";r.frameBorder = \"0\";r.style.zIndex=51;r.src=\"https://myallocator.com/en/booknow/\"+e;document.getElementsByTagName(\"body\")[0].appendChild(r);n.addEventListener?n.addEventListener(\"click\",function(){t.parentNode.removeChild(t);n.parentNode.removeChild(n);r.parentNode.removeChild(r)},!1):n.attachEvent(\"onclick\",function(){t.parentNode.removeChild(t);n.parentNode.removeChild(n);r.parentNode.removeChild(r)});t.addEventListener?t.addEventListener(\"click\",function(){t.parentNode.removeChild(t);n.parentNode.removeChild(n);r.parentNode.removeChild(r)},!1):t.attachEvent(\"onclick\",function(){t.parentNode.removeChild(t);n.parentNode.removeChild(n);r.parentNode.removeChild(r)});t.style.marginLeft=bookNowWidth/2-35+\"px\";t.style.top=\"38px\";window.scroll(0,0)} </script>
";
    }

    // line 7
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 385
    public function block_content_part($context, array $blocks = array())
    {
        // line 386
        echo "<!--=== Content Part ===-->
<div class=\"container\">\t\t
    <div class=\"row-fluid\">
        ";
        // line 389
        $this->env->loadTemplate("::column_left.html.twig")->display($context);
        // line 390
        echo "    \t<div class=\"span6\">
            <div id=\"myCarousel\" class=\"carousel slide\" style=\"margin-top:20px\">
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <img src=\"/assets/img/carousel/5.jpg\" alt=\"\">
                        <div class=\"carousel-caption\">
                            <h4>First Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta.</p>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=\"/assets/img/carousel/4.jpg\" alt=\"\">
                        <div class=\"carousel-caption\">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta.</p>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=\"/assets/img/carousel/3.jpg\" alt=\"\">
                        <div class=\"carousel-caption\">
                            <h4>Third Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta.</p>
                        </div>
                    </div>
                </div>
";
        // line 421
        echo "            </div>
            <!-- About Us -->
            <div class=\"headline\">
                <h3>Atlas Hostels</h3>
            </div>

            <p>Come and stay in our clean, safe and relaxed backpackers hostel. We offer a safe and secure environment for you and your luggage and we have lots of weekly organised events for our guest to get to know each other. We also provide lots of site facilities including a separate kitchen, washing room with dryer and separate private showers. We are also just off the main street in Paddington in a quiet residential neighbourhood so we can ensure you get a good nights rest.</p>
            <ul class=\"unstyled\">
                <li><i class=\"icon-ok color-green\"></i> Donec id elit non mi porta gravida</li>
                <li><i class=\"icon-ok color-green\"></i> Corporate and Creative</li>
                <li><i class=\"icon-ok color-green\"></i> Responsive Bootstrap Template</li>
                <li><i class=\"icon-ok color-green\"></i> Elit non mi porta gravida</li>
                <li><i class=\"icon-ok color-green\"></i> Award winning digital agency</li>
            </ul><br />

            <!-- Blockquotes -->
            <blockquote>
                <p>Our hostel is fantastic for relaxing in Hyde Park, shopping in Regents Street, going out for drinks and food in Soho, visiting museums in South Kensington all of these attractions are within a 20 minute walk from the hostel</p>
                <small>Dean Hall, Owner</small>
            </blockquote>

        </div>
        ";
        // line 443
        $this->env->loadTemplate("::column_right.html.twig")->display($context);
        // line 444
        echo "    </div><!--/row-fluid-->\t
    <!--//End About Us -->

</div><!--/container-->\t\t
<!-- End Content Part -->
";
    }

    public function getTemplateName()
    {
        return "AtlasFrontEndBundle:Page:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 444,  104 => 443,  80 => 421,  53 => 390,  51 => 389,  46 => 386,  43 => 385,  38 => 7,  33 => 4,  30 => 3,);
    }
}
