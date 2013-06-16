<?php

/* AtlasFrontEndBundle:Page:booking.html.twig */
class __TwigTemplate_13cb6a56685482c1b7c63fdc52cecf95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'heading_breadcrumbs' => array($this, 'block_heading_breadcrumbs'),
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
    public function block_heading_breadcrumbs($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row-fluid breadcrumbs\">
    <div class=\"container\">
        <h1 class=\"pull-left\">Booking</h1>
        <ul class=\"pull-right breadcrumb\">
            <li><a href=\"/\">Home</a> <span class=\"divider\">/</span></li>
            <li class=\"active\">Booking</li>
        </ul>
    </div><!--/container-->
</div>
";
    }

    // line 15
    public function block_content_part($context, array $blocks = array())
    {
        // line 16
        echo "<!--=== Content Part ===-->
<div class=\"container\">\t\t
    <div class=\"row-fluid\">
        <div class=\"span9\">
            <div class=\"myallocator\">
                <iframe src=\"https://myallocator.com/booknow/Ne96YOAywhUCXR1S-3kQEQ\" style=\"width: 410px; height: 400px; border: none\" frameBorder=\"0\" allowtransparency=\"true\"></iframe>
            </div>
        </div><!--/span9-->
    \t<div class=\"span3\">
            <!-- Our Services -->
            <div class=\"who margin-bottom-30\">
                <div class=\"headline\"><h3>Features</h3></div>
                <p>At vero eos et accusamus et iusto odio dign issimos ducimus qui blanditiis iusto.</p>
                <ul class=\"unstyled\">
                    <li><a href=\"#\"><i class=\"icon-ok\"></i>Central Location</a></li>
                    <li><a href=\"#\"><i class=\"icon-ok\"></i>Secure Lockers</a></li>
                    <li><a href=\"#\"><i class=\"icon-ok\"></i>Free Wi-Fi</a></li>
                    <li><a href=\"#\"><i class=\"icon-ok\"></i>Common Kitchen</a></li>
                    <li><a href=\"#\"><i class=\"icon-ok\"></i>Social Activities</a></li>
                    <li><a href=\"#\"><i class=\"icon-ok\"></i>Hostel cleaned every day</a></li>
                </ul>
            </div>
            <!-- Contact Us -->
            <div class=\"who margin-bottom-30\">
                <div class=\"headline\"><h3>Contact Us</h3></div>
                <p>We have staff working 24 hours a day, 7 days a week</p>
                <ul class=\"unstyled\">
                    <li><i class=\"icon-home\"></i>16 Talbot Street, London, Paddington, W2 5LH</li>
                    <li><a href=\"mailto:info@atlashostels.com\"><i class=\"icon-envelope-alt\"></i>info@atlashostels.com</a></li>
                    <li><i class=\"icon-phone-sign\"></i>0845 519 9448</li>
                </ul>
            </div>
        </div><!--/span3-->
    </div><!--/row-fluid-->        
</div><!--/container-->\t\t
<!--=== End Content Part ===-->
";
    }

    public function getTemplateName()
    {
        return "AtlasFrontEndBundle:Page:booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  45 => 15,  32 => 4,  29 => 3,);
    }
}
