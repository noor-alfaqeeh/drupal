<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @mili/template-parts/slider.html.twig */
class __TwigTemplate_6ede5c51c7663171d5bf82a416eeef8e8e049f98a951f22862b33f46de194ec5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4];
        $filters = ["raw" => 5, "striptags" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'striptags'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 1
        echo "<section class=\"slider\">
  <div class=\"container\">
  <ul class=\"js-rotating\">
      ";
        // line 4
        if ((($context["slider_code"] ?? null) != "")) {
            // line 5
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed(($context["slider_code"] ?? null)), "<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<i>,<button>,<mark>"));
            echo "
      ";
        } else {
            // line 7
            echo "      <li>
\t\t\t\t<h1>Mili is Multipurpose Drupal theme</h1>
\t\t\t\t<p>Mili Theme is packed full of all the amazing features and options for you to create a successful website</p>
\t\t\t\t<a class=\"button\" href=\"#\">Get Started</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<h1>Welcome To Drupar Design Studio</h1>
\t\t\t\t<p>We present you material design. We put our hearts and soul into making every project.</p>
\t\t\t\t<a class=\"button\" href=\"#\">Get Started</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<h1>We Create Awesome Drupal Themes!</h1>
\t\t\t\t<p>Our themes are of high quality, flexible and beautifully crafted that stand out of crowd.</p>
\t\t\t\t<a class=\"button\" href=\"#\">Get Started</a>
\t\t\t</li>
      ";
        }
        // line 23
        echo "    </ul> <!--/.home-slider -->
  </div> <!--/.container -->
</section>
";
    }

    public function getTemplateName()
    {
        return "@mili/template-parts/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  68 => 7,  62 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@mili/template-parts/slider.html.twig", "/var/www/html/drupl/themes/mili/templates/template-parts/slider.html.twig");
    }
}
