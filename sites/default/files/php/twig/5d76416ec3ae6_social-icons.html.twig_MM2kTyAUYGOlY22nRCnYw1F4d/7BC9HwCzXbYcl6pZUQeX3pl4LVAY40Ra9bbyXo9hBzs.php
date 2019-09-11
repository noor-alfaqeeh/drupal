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

/* @mili/template-parts/social-icons.html.twig */
class __TwigTemplate_ac4ac2ba529cba06881a5954b71a6a448a0c461e3db5c37e5036d8b49dfea896 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = ["escape" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        if (($context["all_icons_show"] ?? null)) {
            // line 2
            echo "<ul class=\"social-icons\">
  ";
            // line 3
            if ((($context["facebook_url"] ?? null) != "")) {
                // line 4
                echo "    <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-facebook\"></i></a></li>
  ";
            }
            // line 6
            echo "  ";
            if ((($context["twitter_url"] ?? null) != "")) {
                // line 7
                echo "    <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-twitter\"></i></a></li>
  ";
            }
            // line 9
            echo "  ";
            if ((($context["instagram_url"] ?? null) != "")) {
                // line 10
                echo "    <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-instagram\"></i></a></li>
  ";
            }
            // line 12
            echo "  ";
            if ((($context["linkedin_url"] ?? null) != "")) {
                // line 13
                echo "    <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-linkedin\"></i></a></li>
  ";
            }
            // line 15
            echo "  ";
            if ((($context["youtube_url"] ?? null) != "")) {
                // line 16
                echo "    <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-youtube\"></i></a></li>
  ";
            }
            // line 18
            echo "  ";
            if ((($context["gplus_url"] ?? null) != "")) {
                // line 19
                echo "    <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["gplus_url"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-google-plus\"></i></a></li>
  ";
            }
            // line 21
            echo "  ";
            if ((($context["telegram_url"] ?? null) != "")) {
                // line 22
                echo "    <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["telegram_url"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-telegram\"></i></a></li>
  ";
            }
            // line 24
            echo "  ";
            if ((($context["whatsapp_url"] ?? null) != "")) {
                // line 25
                echo "    <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["whatsapp_url"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-whatsapp\"></i></a></li>
  ";
            }
            // line 27
            echo "  ";
            if ((($context["github_url"] ?? null) != "")) {
                // line 28
                echo "    <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["github_url"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"icon-github\"></i></a></li>
  ";
            }
            // line 30
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@mili/template-parts/social-icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  134 => 28,  131 => 27,  125 => 25,  122 => 24,  116 => 22,  113 => 21,  107 => 19,  104 => 18,  98 => 16,  95 => 15,  89 => 13,  86 => 12,  80 => 10,  77 => 9,  71 => 7,  68 => 6,  62 => 4,  60 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@mili/template-parts/social-icons.html.twig", "/var/www/html/drupl/themes/mili/templates/template-parts/social-icons.html.twig");
    }
}
