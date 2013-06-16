<?php

/* AtlasFrontEndBundle:Page:investors.html.twig */
class __TwigTemplate_0e4efb486f582e0e6c3e768f06812e14 extends Twig_Template
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
        <h1 class=\"pull-left\">Investors</h1>
        <ul class=\"pull-right breadcrumb\">
            <li><a href=\"/\">Home</a> <span class=\"divider\">/</span></li>
            <li class=\"active\">Investors</li>
        </ul>
    </div><!--/container-->
</div>
";
    }

    // line 15
    public function block_content_part($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"container\">\t\t
    <div class=\"row-fluid privacy\">
        <p>Atlas Hostels Plc was incorporated with experts from the fields of investments, property and finance with established records of achievement.</p>
        <p>We have a culture which is driven by the philosophy and will to succeed in the current economic conditions prevalent in today’s global economy.</p>
        <p>The travel and tourism market offers opportunities that have established growth records. In economic terms, the WTTC anticipates that tourism will have a global value of US\$10.8trillion by 2018. The founders are passionate about establishing a globally recognisable brand name.</p>
        <p>We aim to elevate the standards of the global travel hostel industry, in part by offering the combined experience of more than forty years of our management team and the active involvement of business angels, High Net Worth individuals and/or institutions.</p>
        <p>You can read more about investing in Atlas Hostels by visiting the <a href=\"http://www.atlashostelsplc.com/\" target=\"_blank\">investment portal</a></p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AtlasFrontEndBundle:Page:investors.html.twig";
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
