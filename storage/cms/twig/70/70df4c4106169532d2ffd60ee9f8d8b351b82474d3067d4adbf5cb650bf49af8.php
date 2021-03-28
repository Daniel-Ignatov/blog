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

/* /var/www/html/themes/zwiebl-zwiebl_stellar/partials/all_pages/footer.htm */
class __TwigTemplate_7e1b85242b4edf4123ee76439c4f128f3568049476e5fbf5f90b878db840a13c extends \Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<!-- Footer -->
<footer id=\"footer\">
    <section>
        <h2>ABOUT ME</h2>
        <p>INFO</p>
        <ul class=\"actions\">
            <li><a href=\"generic.html\" class=\"button\">123</a></li>
        </ul>
    </section>
    <section>
        <h2>Etiam feugiat</h2>
        <dl class=\"alt\">
            <dt>Address</dt>
            <dd>1234 Somewhere Road &bull; Nashville, TN 00000 &bull; USA</dd>
            <dt>Phone</dt>
            <dd>(000) 000-0000 x 0000</dd>
            <dt>Email</dt>
            <dd><a href=\"#\">information@untitled.tld</a></dd>
        </dl>
        <ul class=\"icons\">
            <li><a href=\"#\" class=\"icon fa-twitter alt\"><span class=\"label\">Twitter</span></a></li>
            <li><a href=\"#\" class=\"icon fa-facebook alt\"><span class=\"label\">Facebook</span></a></li>
            <li><a href=\"#\" class=\"icon fa-instagram alt\"><span class=\"label\">Instagram</span></a></li>
            <li><a href=\"#\" class=\"icon fa-github alt\"><span class=\"label\">GitHub</span></a></li>
            <li><a href=\"#\" class=\"icon fa-dribbble alt\"><span class=\"label\">Dribbble</span></a></li>
        </ul>
    </section>
    <p class=\"copyright\">&copy; Untitled. Design: <a href=\"https://html5up.net\">HTML5 UP</a>.</p>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/zwiebl-zwiebl_stellar/partials/all_pages/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<footer id=\"footer\">
    <section>
        <h2>ABOUT ME</h2>
        <p>INFO</p>
        <ul class=\"actions\">
            <li><a href=\"generic.html\" class=\"button\">123</a></li>
        </ul>
    </section>
    <section>
        <h2>Etiam feugiat</h2>
        <dl class=\"alt\">
            <dt>Address</dt>
            <dd>1234 Somewhere Road &bull; Nashville, TN 00000 &bull; USA</dd>
            <dt>Phone</dt>
            <dd>(000) 000-0000 x 0000</dd>
            <dt>Email</dt>
            <dd><a href=\"#\">information@untitled.tld</a></dd>
        </dl>
        <ul class=\"icons\">
            <li><a href=\"#\" class=\"icon fa-twitter alt\"><span class=\"label\">Twitter</span></a></li>
            <li><a href=\"#\" class=\"icon fa-facebook alt\"><span class=\"label\">Facebook</span></a></li>
            <li><a href=\"#\" class=\"icon fa-instagram alt\"><span class=\"label\">Instagram</span></a></li>
            <li><a href=\"#\" class=\"icon fa-github alt\"><span class=\"label\">GitHub</span></a></li>
            <li><a href=\"#\" class=\"icon fa-dribbble alt\"><span class=\"label\">Dribbble</span></a></li>
        </ul>
    </section>
    <p class=\"copyright\">&copy; Untitled. Design: <a href=\"https://html5up.net\">HTML5 UP</a>.</p>
</footer>", "/var/www/html/themes/zwiebl-zwiebl_stellar/partials/all_pages/footer.htm", "");
    }
}
