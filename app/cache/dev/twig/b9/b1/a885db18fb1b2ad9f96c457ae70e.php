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
            'logo' => array($this, 'block_logo'),
            'header' => array($this, 'block_header'),
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
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('header', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('slider', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('heading_breadcrumbs', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('content_part', $context, $blocks);
        // line 128
        echo "

";
        // line 130
        $this->displayBlock('copyright', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('footer_js', $context, $blocks);
        // line 174
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

            ";
        // line 57
        $this->displayBlock('logo', $context, $blocks);
        // line 63
        echo "
            <ul class=\"social-icons\" style=\"float:right;width:105px;\">
                <li><a href=\"#\" data-original-title=\"Facebook\" class=\"social_facebook\"></a></li>
                <li><a href=\"#\" data-original-title=\"Twitter\" class=\"social_twitter\"></a></li>
                <li><a href=\"#\" data-original-title=\"Pinterest\" class=\"social_pintrest\"></a></li>
            </ul>
            <ul class=\"loginbar inline\" style=\"float:right;width:340px;\">
                <li><a href=\"mailto:info@atlashostels.com\"><i class=\"icon-envelope-alt\"></i> info@atlashostels.com</a></li> 
                <li><a><i class=\"icon-phone-sign\"></i> 0845 519 9448</a></li>   
            </ul>
        </div>                        
    </div><!--/container-->     
</div><!--/top-->
<!--=== End Top ===-->    
";
    }

    // line 57
    public function block_logo($context, array $blocks = array())
    {
        // line 58
        echo "            <!-- Logo -->       
            <div class=\"logo\">                                             
                <a href=\"/\"><img id=\"logo-header\" src=\"/assets/img/atlashostels.png\" alt=\"Atlas Hostels\" title=\"Atlas Hostels\"></a>
            </div><!-- /logo -->                  
            ";
    }

    // line 79
    public function block_header($context, array $blocks = array())
    {
        // line 80
        echo "<!--=== Header ===-->
<div class=\"header\">               
    <div class=\"container\"> 

        ";
        // line 84
        $this->displayBlock('navbar', $context, $blocks);
        // line 118
        echo "    </div><!-- /container -->               
</div><!--/header -->      
<!--=== End Header ===-->
";
    }

    // line 84
    public function block_navbar($context, array $blocks = array())
    {
        // line 85
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
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_homepage"), "html", null, true);
        echo "\">Home</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_booking"), "html", null, true);
        echo "\">Book Now!</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_location"), "html", null, true);
        echo "\">Location</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_rooms"), "html", null, true);
        echo "\">Rooms</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_gallery"), "html", null, true);
        echo "\">Gallery</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_help"), "html", null, true);
        echo "\" >FAQ</a>
                        </li>
                    </ul>
                </div><!-- /nav-collapse -->                                
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->                          
        ";
    }

    // line 123
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 125
    public function block_heading_breadcrumbs($context, array $blocks = array())
    {
    }

    // line 127
    public function block_content_part($context, array $blocks = array())
    {
    }

    // line 130
    public function block_copyright($context, array $blocks = array())
    {
        // line 131
        echo "<!--=== Copyright ===-->
<div class=\"copyright\">
    <div class=\"container\">
        <div class=\"row-fluid\">
            <div class=\"span12\" id=\"footer_text\"><p>2013 © Atlas Hostels PLC. <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_privacy_policy"), "html", null, true);
        echo "\">Privacy Policy</a> | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_terms"), "html", null, true);
        echo "\">Terms &amp; Conditions</a> | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_location"), "html", null, true);
        echo "\">Contact Us</a> | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_investors"), "html", null, true);
        echo "\">Investor Relations</a> </p></div>
        </div><!--/row-fluid-->
    </div><!--/container-->\t
</div>
<!--=== End Copyright ===-->
";
    }

    // line 142
    public function block_footer_js($context, array $blocks = array())
    {
        // line 143
        echo "<!-- JS Global Compulsory -->           
<script type=\"text/javascript\" src=\"/assets/js/jquery-1.8.2.min.js\"></script>
<script type=\"text/javascript\" src=\"/assets/js/modernizr.custom.js\"></script>        
<script type=\"text/javascript\" src=\"/assets/plugins/bootstrap/js/bootstrap.min.js\"></script> 
<!-- JS Implementing Plugins -->           
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/flexslider/jquery.flexslider-min.js\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/gmap/gmap.js\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/back-to-top.js\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/parallax-slider/js/modernizr.js\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/parallax-slider/js/jquery.cslider.js\"></script> 
<script type=\"text/javascript\" src=\"/assets/plugins/bxslider/jquery.bxslider.js\"></script>
<!-- JS Page Level -->           
<script type=\"text/javascript\" src=\"/assets/js/app.js\"></script>
<script type=\"text/javascript\" src=\"/assets/js/pages/index.js\"></script>
<script type=\"text/javascript\" src=\"/assets/js/pages/contact.js\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/fancybox/source/jquery.fancybox.pack.js\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js\"></script>
<script type=\"text/javascript\" src=\"/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js\"></script> 
<script type=\"text/javascript\">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();
        Contact.initMap();        
        ";
        // line 167
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
        return array (  375 => 167,  349 => 143,  346 => 142,  330 => 135,  324 => 131,  321 => 130,  316 => 127,  311 => 125,  306 => 123,  295 => 111,  289 => 108,  283 => 105,  277 => 102,  271 => 99,  265 => 96,  252 => 85,  249 => 84,  242 => 118,  240 => 84,  234 => 80,  231 => 79,  223 => 58,  220 => 57,  202 => 63,  200 => 57,  193 => 52,  190 => 51,  178 => 41,  175 => 40,  170 => 35,  165 => 8,  162 => 7,  157 => 174,  155 => 142,  152 => 141,  150 => 130,  146 => 128,  144 => 127,  141 => 126,  139 => 125,  136 => 124,  134 => 123,  131 => 122,  129 => 79,  126 => 78,  124 => 51,  121 => 50,  119 => 40,  113 => 36,  111 => 35,  105 => 32,  101 => 31,  97 => 30,  93 => 29,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  42 => 10,  40 => 7,  32 => 1,);
    }
}
