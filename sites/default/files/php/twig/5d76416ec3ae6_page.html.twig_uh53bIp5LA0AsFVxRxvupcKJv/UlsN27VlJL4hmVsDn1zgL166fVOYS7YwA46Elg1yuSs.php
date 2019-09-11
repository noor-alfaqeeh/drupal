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

/* themes/mili/templates/layout/page.html.twig */
class __TwigTemplate_6f614d4460c25231ba91dfe325486fce4a2622a2eed6a6be9315d9050b1f600e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 52];
        $filters = ["escape" => 58];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
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
        // line 52
        $this->loadTemplate("@mili/template-parts/header.html.twig", "themes/mili/templates/layout/page.html.twig", 52)->display($context);
        // line 53
        $this->loadTemplate("@mili/template-parts/highlighted.html.twig", "themes/mili/templates/layout/page.html.twig", 53)->display($context);
        // line 54
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
    <main id=\"main\" class=\"page-content\">
      ";
        // line 57
        $this->loadTemplate("@mili/template-parts/content_top.html.twig", "themes/mili/templates/layout/page.html.twig", 57)->display($context);
        // line 58
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      ";
        // line 59
        $this->loadTemplate("@mili/template-parts/content_bottom.html.twig", "themes/mili/templates/layout/page.html.twig", 59)->display($context);
        // line 60
        echo "    </main>
    ";
        // line 61
        $this->loadTemplate("@mili/template-parts/sidebar_left.html.twig", "themes/mili/templates/layout/page.html.twig", 61)->display($context);
        // line 62
        echo "    ";
        $this->loadTemplate("@mili/template-parts/sidebar_right.html.twig", "themes/mili/templates/layout/page.html.twig", 62)->display($context);
        // line 63
        echo "  </div> ";
        // line 64
        echo "</div>";
        // line 65
        $this->loadTemplate("@mili/template-parts/footer.html.twig", "themes/mili/templates/layout/page.html.twig", 65)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/mili/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 65,  83 => 64,  81 => 63,  78 => 62,  76 => 61,  73 => 60,  71 => 59,  66 => 58,  64 => 57,  59 => 54,  57 => 53,  55 => 52,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/mili/templates/layout/page.html.twig", "/var/www/html/drupl/themes/mili/templates/layout/page.html.twig");
    }
}
