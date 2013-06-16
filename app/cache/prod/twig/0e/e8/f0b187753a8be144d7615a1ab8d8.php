<?php

/* ::base.html.twig */
class __TwigTemplate_0ee8f0b187753a8be144d7615a1ab8d8 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/plugins/bxslider/jquery.bxslider.css"), "html", null, true);
        echo "\">
    <!-- CSS Theme -->    
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/css/themes/blue.css"), "html", null, true);
        echo "\" id=\"style_color\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/assets/css/themes/headers/header1-blue.css"), "html", null, true);
        echo "\" id=\"style_color-header-1\">    
    ";
        // line 30
        $this->displayBlock('before_head', $context, $blocks);
        // line 31
        echo "</head> 

<body>

";
        // line 35
        $this->displayBlock('after_body', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('top', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('slider', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('heading_breadcrumbs', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('content_part', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('footer', $context, $blocks);
        // line 201
        echo "
";
        // line 202
        $this->displayBlock('copyright', $context, $blocks);
        // line 218
        echo "
";
        // line 219
        $this->displayBlock('footer_js', $context, $blocks);
        // line 247
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

    // line 30
    public function block_before_head($context, array $blocks = array())
    {
    }

    // line 35
    public function block_after_body($context, array $blocks = array())
    {
        // line 36
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

    // line 46
    public function block_top($context, array $blocks = array())
    {
        // line 47
        echo "<!--=== Top ===-->    
<div class=\"top\">
    <div class=\"container\">                 
        <div class=\"row-fluid\">
            <ul class=\"loginbar inline\">
                <li><a href=\"mailto:info@atlashostels.com\"><i class=\"icon-envelope-alt\"></i> info@atlashostels.com</a></li> 
                <li><a><i class=\"icon-phone-sign\"></i> 0845 519 9448</a></li>   
                ";
        // line 54
        echo " 
            </ul>
        </div>                        
    </div><!--/container-->     
</div><!--/top-->
<!--=== End Top ===-->    
";
    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        // line 63
        echo "<!--=== Header ===-->
<div class=\"header\">               
    <div class=\"container\"> 
        ";
        // line 66
        $this->displayBlock('logo', $context, $blocks);
        // line 72
        echo "
        ";
        // line 73
        $this->displayBlock('navbar', $context, $blocks);
        // line 125
        echo "    </div><!-- /container -->               
</div><!--/header -->      
<!--=== End Header ===-->
";
    }

    // line 66
    public function block_logo($context, array $blocks = array())
    {
        // line 67
        echo "        <!-- Logo -->       
        <div class=\"logo\">                                             
            <a href=\"/\"><img id=\"logo-header\" src=\"/assets/img/logo2-default.png\" alt=\"Logo\"></a>
        </div><!-- /logo -->                  
        ";
    }

    // line 73
    public function block_navbar($context, array $blocks = array())
    {
        // line 74
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
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_homepage"), "html", null, true);
        echo "\">Home
                            <b class=\"caret\"></b>                            
                            </a>
                            <b class=\"caret-out\"></b>                        
                        </li>
                        <li>
                            <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_booking"), "html", null, true);
        echo "\">Booking
                                <b class=\"caret\"></b>                            
                            </a>
                            <b class=\"caret-out\"></b>                        
                        </li>
                        <li>
                            <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_location"), "html", null, true);
        echo "\">Location
                                <b class=\"caret\"></b>                            
                            </a>
                            <b class=\"caret-out\"></b>                        
                        </li>
                        <li>
                            <a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_rooms"), "html", null, true);
        echo "\">Rooms
                                <b class=\"caret\"></b>                            
                            </a>
                            <b class=\"caret-out\"></b>                        
                        </li>
                        <li>
                            <a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_gallery"), "html", null, true);
        echo "\">Gallery
                                <b class=\"caret\"></b>                            
                            </a>
                            <b class=\"caret-out\"></b>                        
                        </li>
                        <li>
                            <a href=\"";
        // line 115
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

    // line 130
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 132
    public function block_heading_breadcrumbs($context, array $blocks = array())
    {
    }

    // line 134
    public function block_content_part($context, array $blocks = array())
    {
    }

    // line 136
    public function block_footer($context, array $blocks = array())
    {
        // line 137
        echo "<!--=== Footer ===-->
<div class=\"footer\">
    <div class=\"container\">
        <div class=\"row-fluid\">

            ";
        // line 142
        $this->displayBlock('atlas_investment', $context, $blocks);
        // line 162
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

                <!-- Stay Connected -->
                <div class=\"headline\"><h3>Stay Connected</h3></div>\t
                <ul class=\"social-icons\">
                    <li><a href=\"#\" data-original-title=\"Feed\" class=\"social_rss\"></a></li>
                    <li><a href=\"#\" data-original-title=\"Facebook\" class=\"social_facebook\"></a></li>
                    <li><a href=\"#\" data-original-title=\"Twitter\" class=\"social_twitter\"></a></li>
                    <li><a href=\"#\" data-original-title=\"Goole Plus\" class=\"social_googleplus\"></a></li>
                    <li><a href=\"#\" data-original-title=\"Pinterest\" class=\"social_pintrest\"></a></li>
                    <li><a href=\"#\" data-original-title=\"Linkedin\" class=\"social_linkedin\"></a></li>
                    <li><a href=\"#\" data-original-title=\"Vimeo\" class=\"social_vimeo\"></a></li>
                </ul>
            </div><!--/span4-->

            ";
        // line 189
        $this->displayBlock('facebook_like_box', $context, $blocks);
        // line 195
        echo "
        </div><!--/row-fluid-->\t
    </div><!--/container-->\t
</div><!--/footer-->\t
<!--=== End Footer ===-->
";
    }

    // line 142
    public function block_atlas_investment($context, array $blocks = array())
    {
        // line 143
        echo "            <div class=\"span4\">

                <!-- About -->
                <div class=\"headline\"><h3>About Atlas Hostels PLC</h3></div>\t
                <p>Atlas Hostels Plc was incorporated with experts from the fields of investments, property and finance with established records of achievement.</p>\t
                <p class=\"margin-bottom-25\">To find out more information about investment, please visit the <a href=\"";
        // line 148
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

    // line 189
    public function block_facebook_like_box($context, array $blocks = array())
    {
        // line 190
        echo "            <div class=\"span4\">
                <div class=\"headline\"><h3>Facebook</h3></div>
                <div style=\"background:#fff;\" class=\"fb-like-box\" data-href=\"http://www.facebook.com/pages/Atlas-Hostels-Plc/168741279912015\" data-width=\"292\" data-height=\"400\" data-show-faces=\"true\" data-stream=\"false\" data-show-border=\"true\" data-header=\"true\"></div>
            </div><!--/span4-->
            ";
    }

    // line 202
    public function block_copyright($context, array $blocks = array())
    {
        // line 203
        echo "<!--=== Copyright ===-->
<div class=\"copyright\">
    <div class=\"container\">
        <div class=\"row-fluid\">
            <div class=\"span8\">\t\t\t\t\t\t
                <p>2013 &copy; Atlas Hostels PLC. <a href=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_privacy_policy"), "html", null, true);
        echo "\">Privacy Policy</a> | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_terms"), "html", null, true);
        echo "\">Terms of Service</a> | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atlas_front_end_investors"), "html", null, true);
        echo "\" target=\"_blank\">Invester Centre</a></p>
            </div>
            <div class=\"span4\">\t
                <a href=\"/\"><img id=\"logo-footer\" src=\"/assets/img/logo2-default.png\" class=\"pull-right\" alt=\"\" /></a>
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
<script type=\"text/javascript\">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();
        App.initBxSlider1();
        Index.initParallaxSlider();        
    });
</script>
<!--[if lt IE 9]>
<script src=\"/assets/js/respond.js\"></script>
<![endif]-->
";
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
        return array (  449 => 220,  446 => 219,  428 => 208,  421 => 203,  418 => 202,  410 => 190,  407 => 189,  389 => 148,  382 => 143,  379 => 142,  370 => 195,  368 => 189,  339 => 162,  337 => 142,  330 => 137,  327 => 136,  322 => 134,  317 => 132,  312 => 130,  298 => 115,  289 => 109,  280 => 103,  271 => 97,  262 => 91,  253 => 85,  240 => 74,  237 => 73,  229 => 67,  226 => 66,  219 => 125,  217 => 73,  214 => 72,  212 => 66,  207 => 63,  204 => 62,  194 => 54,  185 => 47,  182 => 46,  170 => 36,  167 => 35,  162 => 30,  157 => 8,  154 => 7,  149 => 247,  147 => 219,  144 => 218,  142 => 202,  139 => 201,  137 => 136,  134 => 135,  132 => 134,  129 => 133,  127 => 132,  124 => 131,  122 => 130,  119 => 129,  117 => 62,  114 => 61,  112 => 46,  109 => 45,  107 => 35,  101 => 31,  99 => 30,  95 => 29,  91 => 28,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  44 => 10,  42 => 7,  34 => 1,  48 => 16,  45 => 15,  32 => 4,  29 => 3,);
    }
}
