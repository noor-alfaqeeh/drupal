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

/* themes/mili/templates/content/node.html.twig */
class __TwigTemplate_63f38412ebb969c00e5a0a281e824453ffa4e882ec545b093a676c21e2497035 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 70, "if" => 80, "trans" => 94, "for" => 98];
        $filters = ["clean_class" => 75, "escape" => 78, "date" => 93];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans', 'for'],
                ['clean_class', 'escape', 'date'],
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
        // line 70
        $context["node_classes"] = [0 => "node", 1 => (($this->getAttribute(        // line 72
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node-promoted") : ("")), 2 => (($this->getAttribute(        // line 73
($context["node"] ?? null), "isSticky", [], "method")) ? ("node-sticky") : ("")), 3 => (( !$this->getAttribute(        // line 74
($context["node"] ?? null), "isPublished", [], "method")) ? ("node-unpublished") : ("")), 4 => ((        // line 75
($context["view_mode"] ?? null)) ? (("node-view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 78
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["node_classes"] ?? null)], "method")), "html", null, true);
        echo ">
";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 80
        if ( !($context["page"] ?? null)) {
            // line 81
            echo "    <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "node-title"], "method")), "html", null, true);
            echo ">
      <a href=\"";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

";
        // line 87
        if (($context["display_submitted"] ?? null)) {
            // line 88
            echo "  <header class=\"node-header\">
    ";
            // line 89
            if (($context["node_author_pic"] ?? null)) {
                // line 90
                echo "      <div class=\"author-picture\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
                echo "</div>
    ";
            }
            // line 92
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "addClass", [0 => "node-submitted-details"], "method")), "html", null, true);
            echo ">
      ";
            // line 93
            $context["createdDate"] = twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "getCreatedTime", [])), "j F Y");
            // line 94
            echo "      ";
            echo t("<span><i class=\"material-icons user-icon\">account_circle</i>@author_name</span><span><i class=\"material-icons\">date_range</i> @createdDate</span>", array("@author_name" => ($context["author_name"] ?? null), "@createdDate" => ($context["createdDate"] ?? null), ));
            // line 95
            echo "      ";
            if (($context["node_tags"] ?? null)) {
                // line 96
                echo "      ";
                if ($this->getAttribute(($context["content"] ?? null), "field_tags", [])) {
                    // line 97
                    echo "        <span><i class=\"material-icons\">apps</i>
        ";
                    // line 98
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "field_tags", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 99
                        echo "          ";
                        if ($this->getAttribute($context["item"], "#title", [], "array")) {
                            // line 100
                            echo "            <a href=\"";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "#url", [], "array")), "html", null, true);
                            echo "\">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "#title", [], "array")), "html", null, true);
                            echo "</a>";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(",");
                            echo "
          ";
                        }
                        // line 102
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "      </span>
      ";
                }
                // line 105
                echo "      ";
            }
            // line 106
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
            echo "
    </div>
  </header>
";
        }
        // line 110
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node-content"], "method")), "html", null, true);
        echo ">
    ";
        // line 111
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/mili/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 111,  160 => 110,  152 => 106,  149 => 105,  145 => 103,  139 => 102,  129 => 100,  126 => 99,  122 => 98,  119 => 97,  116 => 96,  113 => 95,  110 => 94,  108 => 93,  103 => 92,  97 => 90,  95 => 89,  92 => 88,  90 => 87,  85 => 85,  77 => 82,  72 => 81,  70 => 80,  66 => 79,  61 => 78,  59 => 75,  58 => 74,  57 => 73,  56 => 72,  55 => 70,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/mili/templates/content/node.html.twig", "/var/www/html/drupl/themes/mili/templates/content/node.html.twig");
    }
}
