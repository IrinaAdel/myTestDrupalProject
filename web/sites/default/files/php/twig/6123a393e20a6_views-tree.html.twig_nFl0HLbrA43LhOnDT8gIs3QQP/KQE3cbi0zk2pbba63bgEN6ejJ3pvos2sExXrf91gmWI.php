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

/* modules/contrib/views_tree/templates/views-tree.html.twig */
class __TwigTemplate_235f05c17f456f7f4d19de5bbaca6853be0f9191923fefec590cc16d15641011 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 24
        $context["views_tree"] = $this;
        // line 25
        echo "
";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["views_tree"]->gettree($this->getAttribute(($context["items"] ?? null), "leaves", []), ($context["attributes"] ?? null), ($context["list_type"] ?? null)));
        echo "

";
    }

    // line 28
    public function gettree($__items__ = null, $__attributes__ = null, $__list_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "list_type" => $__list_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 29
            echo "  ";
            $context["views_tree"] = $this;
            // line 30
            echo "  ";
            if ($this->getAttribute(($context["context"] ?? null), "list_style", [])) {
                // line 31
                $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ("item-list__" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["context"] ?? null), "list_style", [])))], "method");
                // line 32
                echo "  ";
            }
            // line 33
            echo "  ";
            if ((($context["items"] ?? null) || ($context["empty"] ?? null))) {
                // line 34
                if ( !twig_test_empty(($context["title"] ?? null))) {
                    // line 35
                    echo "<h3>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                    echo "</h3>";
                }
                // line 38
                if (($context["items"] ?? null)) {
                    // line 39
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null)), "html", null, true);
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
                    echo ">";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 41
                        echo "<li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                        echo ">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "node", [])), "html", null, true);
                        echo " ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["views_tree"]->gettree($this->getAttribute($context["item"], "leaves", []), ($context["attributes"] ?? null), ($context["list_type"] ?? null)));
                        echo "</li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null)), "html", null, true);
                    echo ">";
                } else {
                    // line 45
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
                }
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modules/contrib/views_tree/templates/views-tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 45,  102 => 43,  90 => 41,  86 => 40,  81 => 39,  79 => 38,  74 => 35,  72 => 34,  69 => 33,  66 => 32,  64 => 31,  61 => 30,  58 => 29,  44 => 28,  37 => 26,  34 => 25,  32 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/views_tree/templates/views-tree.html.twig", "/var/www/i.adel/data/www/adl.test2.algus.net/web/modules/contrib/views_tree/templates/views-tree.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 24, "macro" => 28, "if" => 30, "set" => 31, "for" => 40];
        static $filters = ["escape" => 35];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
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
}
