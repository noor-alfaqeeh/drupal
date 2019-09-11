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

/* themes/mili/templates/layout/page--front.html.twig */
class __TwigTemplate_f40645d9f9d27f1f39fcda620a98fddcec258d909cc5022e6b945e4380e2e9ee extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 11, "if" => 24];
        $filters = ["escape" => 17];
        $functions = ["attach_library" => 25];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['attach_library']
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
        // line 11
        $this->loadTemplate("@mili/template-parts/header.html.twig", "themes/mili/templates/layout/page--front.html.twig", 11)->display($context);
        // line 12
        $this->loadTemplate("@mili/template-parts/highlighted.html.twig", "themes/mili/templates/layout/page--front.html.twig", 12)->display($context);
        // line 13
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
    <main id=\"home-main\" class=\"page-content home-content\">
      ";
        // line 16
        $this->loadTemplate("@mili/template-parts/content_top.html.twig", "themes/mili/templates/layout/page--front.html.twig", 16)->display($context);
        // line 17
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      ";
        // line 18
        $this->loadTemplate("@mili/template-parts/content_home.html.twig", "themes/mili/templates/layout/page--front.html.twig", 18)->display($context);
        // line 19
        echo "      ";
        $this->loadTemplate("@mili/template-parts/content_bottom.html.twig", "themes/mili/templates/layout/page--front.html.twig", 19)->display($context);
        // line 20
        echo "    </main>
  </div> ";
        // line 22
        echo "</div>";
        // line 23
        $this->loadTemplate("@mili/template-parts/footer.html.twig", "themes/mili/templates/layout/page--front.html.twig", 23)->display($context);
        // line 24
        if (($context["slider_show"] ?? null)) {
            // line 25
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("mili/slider"), "html", null, true);
            echo "
<script>
jQuery(document).ready(function (\$) {
  \$(\".js-rotating\").Morphist({
  \tanimateIn: 'bounceIn',
  \tanimateOut: 'fadeOutLeft',
  \tspeed: 5000,
  });
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/mili/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  83 => 24,  81 => 23,  79 => 22,  76 => 20,  73 => 19,  71 => 18,  66 => 17,  64 => 16,  59 => 13,  57 => 12,  55 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/mili/templates/layout/page--front.html.twig", "/var/www/html/drupl/themes/mili/templates/layout/page--front.html.twig");
    }
}
