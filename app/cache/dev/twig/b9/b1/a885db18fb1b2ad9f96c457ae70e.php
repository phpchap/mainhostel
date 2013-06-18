<?php

/* ::base.html.twig */
class __TwigTemplate_b9b1a885db18fb1b2ad9f96c457ae70e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'before_head' => array($this, 'block_before_head'),
            'after_body' => array($this, 'block_after_body'),
            'top' => array($this, 'block_top'),
            'header' => array($this, 'block_header'),
            'logo' => array($this, 'block_logo'),
            'navbar' => array($this, 'block_navbar'),
            'slider' => array($this, 'block_slider'),
            'heading_breadcrumbs' => array($this, 'block_heading_breadcrumbs'),
            'content_part' => array($this, 'block_content_part'),
            'copyright' => array($this, 'block_copyright'),
            'footer_js' => array($this, 'block_footer_js'),
            'js_init' => array($this, 'block_js_init'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 7]> <html lang=\"en\" class=\"ie7\"> <![endif]-->  
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->  
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->  
<!--[if !IE]><!--> <html lang=\"en\"> <!--<![endif]-->  
<head>
    ";
        // line 7
        $this->displayBlock('page_title', $context, $blocks);
        // line 10
        echo "    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- CSS Global Compulsory-->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/plugins/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/css/headers/header1.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/plugins/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/css/style_responsive.css"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"/favicon.ico\">        
    <!-- CSS Implementing Plugins -->    
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/plugins/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/plugins/flexslider/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">      
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/plugins/parallax-slider/css/parallax-slider.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/plugins/revolution_slider/css/rs-style.css"), "html", null, true);
        echo "\" media=\"screen\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/plugins/revolution_slider/rs-plugin/css/settings.css"), "html", null, true);
        echo "\" media=\"screen\">    
    <!-- CSS Theme -->    
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/css/themes/blue.css"), "html", null, true);
        echo "\" id=\"style_color\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/css/themes/headers/header1-blue.css"), "html", null, true);
        echo "\" id=\"style_color-header-1\">    
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/plugins/fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\">           
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/css/effects.css"), "html", null, true);
        echo "\">           


    ";
        // line 35
        $this->displayBlock('before_head', $context, $blocks);
        // line 36
        echo "</head> 

<body>

";
        // line 40
        $this->displayBlock('after_body', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('top', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('header', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('slider', $context, $blocks);
        // line 123
        echo "
";
        // line 124
        $this->displayBlock('heading_breadcrumbs', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('content_part', $context, $blocks);
        // line 127
        echo "

";
        // line 129
        $this->displayBlock('copyright', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('footer_js', $context, $blocks);
        // line 169
        echo "</body>
</html> ";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        // line 8
        echo "    <title>Atlas Hostels Paddington</title>
    ";
    }

    // line 35
    public function block_before_head($context, array $blocks = array())
    {
    }

    // line 40
    public function block_after_body($context, array $blocks = array())
    {
        // line 41
        echo "<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/en_GB/all.js#xfbml=1&appId=255995124541477\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
";
    }

    // line 51
    public function block_top($context, array $blocks = array())
    {
        // line 52
        echo "<!--=== Top ===-->    
<div class=\"top\">
    <div class=\"container\">                 
        <div class=\"row-fluid\">
            <ul class=\"social-icons\" style=\"float:right;width:105px;\">
                <li><a href=\"#\" data-original-title=\"Facebook\" class=\"social_facebook\"></a></li>
                <li><a href=\"#\" data-original-title=\"Twitter\" class=\"social_twitter\"></a></li>
                <li><a href=\"#\" data-original-title=\"Pinterest\" class=\"social_pintrest\"></a></li>
            </ul>
            <ul class=\"loginbar inline\" style=\"float:right;width:300px;\">
                <li><a href=\"mailto:info@atlashostels.com\"><i class=\"icon-envelope-alt\"></i> info@atlashostels.com</a></li> 
                <li><a><i class=\"icon-phone-sign\"></i> 0845 519 9448</a></li>   
            </ul>

        </div>                        
    </div><!--/container-->     
</div><!--/top-->
<!--=== End Top ===-->    
";
    }

    // line 72
    public function block_header($context, array $blocks = array())
    {
        // line 73
        echo "<!--=== Header ===-->
<div class=\"header\">               
    <div class=\"container\"> 
        ";
        // line 76
        $this->displayBlock('logo', $context, $blocks);
        // line 82
        echo "
        ";
        // line 83
        $this->displayBlock('navbar', $context, $blocks);
        // line 117
        echo "    </div><!-- /container -->               
</div><!--/header -->      
<!--=== End Header ===-->
";
    }

    // line 76
    public function block_logo($context, array $blocks = array())
    {
        // line 77
        echo "        <!-- Logo -->       
        <div class=\"logo\">                                             
            ";
        // line 80
        echo "        </div><!-- /logo -->                  
        ";
    }

    // line 83
    public function block_navbar($context, array $blocks = array())
    {
        // line 84
        echo "        <!-- Menu -->       
        <div class=\"navbar\">                                
            <div class=\"navbar-inner\">                                  
                <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a><!-- /nav-collapse -->                                  
                <div class=\"nav-collapse collapse\">                                     
                    <ul class=\"nav\">
                        <li class=\"active\">
                            <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_homepage"), "html", null, true);
        echo "\">Home</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_booking"), "html", null, true);
        echo "\">Booking</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_location"), "html", null, true);
        echo "\">Location</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_rooms"), "html", null, true);
        echo "\">Rooms</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_gallery"), "html", null, true);
        echo "\">Gallery</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_help"), "html", null, true);
        echo "\" >Help</a>
                        </li>
                    </ul>
                </div><!-- /nav-collapse -->                                
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->                          
        ";
    }

    // line 122
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 124
    public function block_heading_breadcrumbs($context, array $blocks = array())
    {
    }

    // line 126
    public function block_content_part($context, array $blocks = array())
    {
    }

    // line 129
    public function block_copyright($context, array $blocks = array())
    {
        // line 130
        echo "<!--=== Copyright ===-->
<div class=\"copyright\">
</div><!--/copyright-->\t
<!--=== End Copyright ===-->
";
    }

    // line 136
    public function block_footer_js($context, array $blocks = array())
    {
        // line 137
        echo "<!-- JS Global Compulsory -->           
<script type=\"text/javascript\" src=\"/assets/js/jquery-1.8.2.min.js\"></script>
<script type=\"text/javascript\" src=\"/assets/js/modernizr.custom.js\"></script>        
<script type=\"text/javascript\" src=\"/assets/plugins/bootstrap/js/bootstrap.min.js\"></script> 
<!-- JS Implementing Plugins -->           
<script type=\"text/javascript\" src=\"/assets/plugins/flexslider/jquery.flexslider-min.js\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/parallax-slider/js/modernizr.js\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/parallax-slider/js/jquery.cslider.js\"></script> 
<script type=\"text/javascript\" src=\"/assets/plugins/bxslider/jquery.bxslider.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/gmap/gmap.js\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/back-to-top.js\"></script>
<!-- JS Page Level -->           
<script type=\"text/javascript\" src=\"/assets/js/app.js\"></script>
<script type=\"text/javascript\" src=\"/assets/js/pages/index.js\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/fancybox/source/jquery.fancybox.pack.js\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js\"></script> 

<script type=\"text/javascript\">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();
        Index.initRevolutionSlider();        
        ";
        // line 161
        $this->displayBlock('js_init', $context, $blocks);
        echo "  
    });
</script>

<!--[if lt IE 9]>
<script src=\"/assets/js/respond.js\"></script>
<![endif]-->
";
    }

    public function block_js_init($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 161,  335 => 137,  332 => 136,  324 => 130,  321 => 129,  316 => 126,  311 => 124,  306 => 122,  295 => 110,  289 => 107,  283 => 104,  277 => 101,  271 => 98,  265 => 95,  252 => 84,  249 => 83,  244 => 80,  240 => 77,  237 => 76,  230 => 117,  228 => 83,  225 => 82,  223 => 76,  218 => 73,  215 => 72,  193 => 52,  190 => 51,  178 => 41,  175 => 40,  170 => 35,  165 => 8,  162 => 7,  157 => 169,  155 => 136,  152 => 135,  150 => 129,  146 => 127,  144 => 126,  141 => 125,  139 => 124,  136 => 123,  134 => 122,  131 => 121,  129 => 72,  126 => 71,  124 => 51,  121 => 50,  119 => 40,  113 => 36,  111 => 35,  105 => 32,  101 => 31,  97 => 30,  93 => 29,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  42 => 10,  40 => 7,  32 => 1,  46 => 386,  43 => 385,  38 => 7,  33 => 4,  30 => 3,);
    }
}
