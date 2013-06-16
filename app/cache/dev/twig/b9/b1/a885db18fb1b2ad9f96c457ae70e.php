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
            'footer' => array($this, 'block_footer'),
            'atlas_investment' => array($this, 'block_atlas_investment'),
            'facebook_like_box' => array($this, 'block_facebook_like_box'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
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
        // line 139
        echo "
";
        // line 140
        $this->displayBlock('slider', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('heading_breadcrumbs', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('content_part', $context, $blocks);
        // line 145
        echo "
";
        // line 146
        $this->displayBlock('footer', $context, $blocks);
        // line 202
        echo "
";
        // line 203
        $this->displayBlock('copyright', $context, $blocks);
        // line 218
        echo "
";
        // line 219
        $this->displayBlock('footer_js', $context, $blocks);
        // line 252
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
        // line 135
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
            <a href=\"/\"><img id=\"logo-header\" src=\"/assets/img/logo2-default.png\" alt=\"Logo\"></a>
        </div><!-- /logo -->                  
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
        echo "\">Home
                            <b class=\"caret\"></b>                            
                            </a>
                            <b class=\"caret-out\"></b>                        
                        </li>
                        <li>
                            <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_booking"), "html", null, true);
        echo "\">Booking
                                <b class=\"caret\"></b>                            
                            </a>
                            <b class=\"caret-out\"></b>                        
                        </li>
                        <li>
                            <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_location"), "html", null, true);
        echo "\">Location
                                <b class=\"caret\"></b>                            
                            </a>
                            <b class=\"caret-out\"></b>                        
                        </li>
                        <li>
                            <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_rooms"), "html", null, true);
        echo "\">Rooms
                                <b class=\"caret\"></b>                            
                            </a>
                            <b class=\"caret-out\"></b>                        
                        </li>
                        <li>
                            <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_gallery"), "html", null, true);
        echo "\">Gallery
                                <b class=\"caret\"></b>                            
                            </a>
                            <b class=\"caret-out\"></b>                        
                        </li>
                        <li>
                            <a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_help"), "html", null, true);
        echo "\" >Help
                                <b class=\"caret\"></b>                            
                            </a>
                            <b class=\"caret-out\"></b>                        
                        </li>
                    </ul>
                </div><!-- /nav-collapse -->                                
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->                          
        ";
    }

    // line 140
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 142
    public function block_heading_breadcrumbs($context, array $blocks = array())
    {
    }

    // line 144
    public function block_content_part($context, array $blocks = array())
    {
    }

    // line 146
    public function block_footer($context, array $blocks = array())
    {
        // line 147
        echo "<!--=== Footer ===-->
<div class=\"footer\">
    <div class=\"container\">
        <div class=\"row-fluid\">

            ";
        // line 152
        $this->displayBlock('atlas_investment', $context, $blocks);
        // line 172
        echo "            
            <div class=\"span4\">

                <!-- Contact us -->
                <div class=\"headline\"><h3>Contact Us</h3></div>\t
                <address>
                    16 Talbot Street<br />
                    London <br />
                    Paddington <br />
                    W2 5LH <br />
                    Phone: 0845 519 9448 <br />
                    Fax: ???? ??? ???? <br />
                    Email: <a href=\"mailto:info@atlashostels.com\" class=\"\">info@atlashostels.com</a>
                </address>


            </div><!--/span4-->

            ";
        // line 190
        $this->displayBlock('facebook_like_box', $context, $blocks);
        // line 196
        echo "
        </div><!--/row-fluid-->\t
    </div><!--/container-->\t
</div><!--/footer-->\t
<!--=== End Footer ===-->
";
    }

    // line 152
    public function block_atlas_investment($context, array $blocks = array())
    {
        // line 153
        echo "            <div class=\"span4\">

                <!-- About -->
                <div class=\"headline\"><h3>About Atlas Hostels PLC</h3></div>\t
                <p>Atlas Hostels Plc was incorporated with experts from the fields of investments, property and finance with established records of achievement.</p>\t
                <p class=\"margin-bottom-25\">To find out more information about investment, please visit the <a href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_investors"), "html", null, true);
        echo "\">investor centre</a></p>\t

                <!-- Monthly Newsletter -->
                <div class=\"headline\"><h3>Monthly Newsletter</h3></div>\t
                <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                <form class=\"form-inline\">
                    <div class=\"input-append\">
                        <input type=\"text\" placeholder=\"Email Address\" class=\"input-medium\">
                        <button class=\"btn-u\">Subscribe</button>
                    </div>
                </form>\t
\t\t\t\t\t\t
            </div><!--/span4-->\t
            ";
    }

    // line 190
    public function block_facebook_like_box($context, array $blocks = array())
    {
        // line 191
        echo "            <div class=\"span4\">
                <div class=\"headline\"><h3>Facebook</h3></div>
                <div style=\"background:#fff;\" class=\"fb-like-box\" data-href=\"http://www.facebook.com/pages/Atlas-Hostels-Plc/168741279912015\" data-width=\"292\" data-height=\"400\" data-show-faces=\"true\" data-stream=\"false\" data-show-border=\"true\" data-header=\"true\"></div>
            </div><!--/span4-->
            ";
    }

    // line 203
    public function block_copyright($context, array $blocks = array())
    {
        // line 204
        echo "<!--=== Copyright ===-->
<div class=\"copyright\">

    <div class=\"container\">
        <div class=\"row-fluid\">
            <div class=\"span8\">\t\t\t\t\t\t
                <p>2013 &copy; Atlas Hostels PLC. <a href=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_privacy_policy"), "html", null, true);
        echo "\">Privacy Policy</a> | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_terms"), "html", null, true);
        echo "\">Terms of Service</a> | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_investors"), "html", null, true);
        echo "\" target=\"_blank\">Invester Centre</a></p>
            </div>

        </div><!--/row-fluid-->
    </div><!--/container-->\t
</div><!--/copyright-->\t
<!--=== End Copyright ===-->
";
    }

    // line 219
    public function block_footer_js($context, array $blocks = array())
    {
        // line 220
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
        // line 244
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
        return array (  483 => 244,  457 => 220,  454 => 219,  438 => 210,  430 => 204,  427 => 203,  419 => 191,  416 => 190,  398 => 158,  391 => 153,  388 => 152,  379 => 196,  377 => 190,  357 => 172,  355 => 152,  348 => 147,  345 => 146,  340 => 144,  335 => 142,  330 => 140,  316 => 125,  307 => 119,  298 => 113,  289 => 107,  280 => 101,  271 => 95,  258 => 84,  255 => 83,  247 => 77,  244 => 76,  237 => 135,  235 => 83,  232 => 82,  230 => 76,  225 => 73,  222 => 72,  200 => 52,  197 => 51,  185 => 41,  182 => 40,  177 => 35,  172 => 8,  169 => 7,  164 => 252,  162 => 219,  159 => 218,  157 => 203,  154 => 202,  152 => 146,  149 => 145,  147 => 144,  144 => 143,  142 => 142,  139 => 141,  137 => 140,  134 => 139,  132 => 72,  129 => 71,  127 => 51,  124 => 50,  122 => 40,  116 => 36,  114 => 35,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  45 => 10,  35 => 1,  46 => 386,  43 => 7,  38 => 7,  33 => 4,  30 => 3,);
    }
}
