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

/* @mili/template-parts/header.html.twig */
class __TwigTemplate_92660691c6221cc213876ab1740d23cb6f02b71ef78eb3390ea4abee591b94f2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4, "include" => 10];
        $filters = ["escape" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
        // line 1
        echo "<!-- Start: Header -->
<header class=\"header\">
  <div class=\"container header-main\">
    ";
        // line 4
        if ($this->getAttribute(($context["page"] ?? null), "site_branding", [])) {
            // line 5
            echo "      <div class=\"site-brand\">
        ";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "site_branding", [])), "html", null, true);
            echo "
      </div> <!--/.site-branding -->
    ";
        }
        // line 9
        echo "    <div class=\"header-right\">
      ";
        // line 10
        $this->loadTemplate("@mili/template-parts/search.html.twig", "@mili/template-parts/header.html.twig", 10)->display($context);
        // line 11
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 12
            echo "         <div class=\"mobile-menu\">
           <i class=\"material-icons\">menu</i>
         </div>
         <div class=\"primary-menu-wrapper\">
           <div class=\"menu-wrap\">
             <div class=\"close-mobile-menu\">x</div>
             ";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
           </div>
         </div>
       ";
        }
        // line 22
        echo "       <!-- End: primary menu region -->
    </div> <!-- /.header-right -->
  </div> <!-- /.container -->
  ";
        // line 25
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 26
            echo "    ";
            $this->loadTemplate("@mili/template-parts/slider.html.twig", "@mili/template-parts/header.html.twig", 26)->display($context);
            // line 27
            echo "  ";
        } elseif ( !($context["is_front"] ?? null)) {
            // line 28
            echo "    ";
            $this->loadTemplate("@mili/template-parts/page_header.html.twig", "@mili/template-parts/header.html.twig", 28)->display($context);
            // line 29
            echo "  ";
        }
        // line 30
        echo "</header>
<!-- End: Header -->
";
    }

    public function getTemplateName()
    {
        return "@mili/template-parts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 30,  110 => 29,  107 => 28,  104 => 27,  101 => 26,  99 => 25,  94 => 22,  87 => 18,  79 => 12,  76 => 11,  74 => 10,  71 => 9,  65 => 6,  62 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@mili/template-parts/header.html.twig", "/var/www/html/drupl/themes/mili/templates/template-parts/header.html.twig");
    }
}
