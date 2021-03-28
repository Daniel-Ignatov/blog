<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm */
class __TwigTemplate_76aaabb7754ef58c548a311aa51101fa51ddf42347ac0ccfb359c0ea9f8e58d5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("content" => 6);
        $filters = array("theme" => 3);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Header -->
<header id=\"header\" class=\"alt\">
<!--     <span class=\"logo\"><img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"Logo\" /></span> -->


    <h1>";
        // line 6
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("header/Header_title.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo " </h1>
    <p>";
        // line 7
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("header/Header_description.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo " </p>
</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 7,  72 => 6,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->
<header id=\"header\" class=\"alt\">
<!--     <span class=\"logo\"><img src=\"{{'assets/images/logo.svg'|theme}}\" alt=\"Logo\" /></span> -->


    <h1>{% content 'header/Header_title.htm' %} </h1>
    <p>{% content 'header/Header_description.htm' %} </p>
</header>", "/var/www/html/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm", "");
    }
}
