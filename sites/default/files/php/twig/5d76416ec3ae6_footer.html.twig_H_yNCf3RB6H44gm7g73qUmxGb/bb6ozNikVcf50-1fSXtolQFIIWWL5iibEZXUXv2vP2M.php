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

/* @mili/template-parts/footer.html.twig */
class __TwigTemplate_369766580fe636fa07a9059469e85b75e9b1732fbcb96521f4687126529c31d2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4, "include" => 56];
        $filters = ["escape" => 7, "date" => 49];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
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
        echo "<!-- Start: Footer -->
<footer class=\"footer\">
  <div class=\"container\">
  ";
        // line 4
        if ($this->getAttribute(($context["page"] ?? null), "footer_top", [])) {
            // line 5
            echo "    <section id=\"footer-top\">
      <div class=\"footer-top\">
        ";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top", [])), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 10
        echo "<!-- /footer-top -->

  ";
        // line 12
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 13
            echo "   <section id=\"footer-blocks\">
      <div class=\"full footer-blocks\">
         <div class=\"one_four_first footer-block\">
            ";
            // line 16
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 17
                echo "               ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            ";
            }
            // line 19
            echo "         </div> <!--/footer-first -->

         <div class=\"one_four footer-block\">
            ";
            // line 22
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 23
                echo "               ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            ";
            }
            // line 25
            echo "         </div> <!--/footer-second -->

         <div class=\"one_four footer-block\">
            ";
            // line 28
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 29
                echo "               ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            ";
            }
            // line 31
            echo "         </div> <!--/footer-three -->

         <div class=\"one_four one_four_last footer-block\">
            ";
            // line 34
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 35
                echo "               ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
            ";
            }
            // line 37
            echo "         </div> <!--/footer-fourth -->
      </div> <!-- /.full -->
   </section> <!--/footer-blocks -->
 ";
        }
        // line 40
        echo " ";
        // line 41
        echo "
 ";
        // line 42
        if (((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null)) || $this->getAttribute(($context["page"] ?? null), "footer_bottom", []))) {
            // line 43
            echo "  <section id=\"footer-bottom\">
    ";
            // line 44
            if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
                // line 45
                echo "      <div class=\"footer-bottom-section full\">
      ";
                // line 46
                if (($context["copyright_text"] ?? null)) {
                    // line 47
                    echo "        <div class=\"one_half\">
          <div class=\"copyright\">
            &copy; ";
                    // line 49
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                    echo ", All rights reserved.
          </div>
        </div> <!-- /.one_half -->
        <div class=\"one_half text_right\">
      ";
                } else {
                    // line 54
                    echo "        <div class=\"text_right\">
      ";
                }
                // line 56
                echo "        ";
                $this->loadTemplate("@mili/template-parts/social-icons.html.twig", "@mili/template-parts/footer.html.twig", 56)->display($context);
                // line 57
                echo "      </div> <!--/.text_right -->
      </div> <!--/.full -->
    ";
            }
            // line 59
            echo " <!-- end condition if copyright or social icons -->
    ";
            // line 60
            if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
                // line 61
                echo "      <div class=\"footer-bottom\">
        ";
                // line 62
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
                echo "
      </div> <!--/.footer-bottom -->
    ";
            }
            // line 65
            echo "  </section> <!-- /footer-bottom -->
  ";
        }
        // line 67
        echo "
  </div><!-- /.container -->
</footer>
";
        // line 70
        if (($context["scrolltotop_on"] ?? null)) {
            // line 71
            echo "<div class=\"scrolltop\"><i class=\"material-icons\">keyboard_arrow_up</i></div>
";
        }
        // line 73
        echo "<!-- End: Footer -->
";
    }

    public function getTemplateName()
    {
        return "@mili/template-parts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 73,  205 => 71,  203 => 70,  198 => 67,  194 => 65,  188 => 62,  185 => 61,  183 => 60,  180 => 59,  175 => 57,  172 => 56,  168 => 54,  158 => 49,  154 => 47,  152 => 46,  149 => 45,  147 => 44,  144 => 43,  142 => 42,  139 => 41,  137 => 40,  131 => 37,  125 => 35,  123 => 34,  118 => 31,  112 => 29,  110 => 28,  105 => 25,  99 => 23,  97 => 22,  92 => 19,  86 => 17,  84 => 16,  79 => 13,  77 => 12,  73 => 10,  66 => 7,  62 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@mili/template-parts/footer.html.twig", "/var/www/html/drupl/themes/mili/templates/template-parts/footer.html.twig");
    }
}
