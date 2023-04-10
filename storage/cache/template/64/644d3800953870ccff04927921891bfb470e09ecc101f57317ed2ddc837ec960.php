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

/* default/template/common/currency.twig */
class __TwigTemplate_2b565f204a857dcf5122ad5acf7316c290e9e887cd0105ce72b5d528cf3e0e20 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "<div class=\"pull-left\">
  <form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
    <div class=\"btn-group\">
      <button class=\"btn btn-link dropdown-toggle\" style=\"padding-left:0\" data-toggle=\"dropdown\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 7
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 7) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 7) == ($context["code"] ?? null)))) {
                    echo " 
        <!-- <strong>";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 8);
                    echo "</strong> -->
        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 9
$context["currency"], "symbol_right", [], "any", false, false, false, 9) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 9) == ($context["code"] ?? null)))) {
                    echo " 
        <strong>";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 10);
                    echo "</strong> 
        ";
                }
                // line 12
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
        <span class=\"hidden-xs hidden-sm hidden-md\">";
            // line 13
            echo ($context["text_currency"] ?? null);
            echo "</span>&nbsp;
        <i class=\"fa fa-caret-down\"></i>
      </button>
      <ul class=\"dropdown-menu\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 18
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "        <li>
          <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 20);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 20);
                    echo "</button>
        </li>
        ";
                } else {
                    // line 23
                    echo "        <li>
          <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 24);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 24);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 24);
                    echo "</button>
        </li>
        ";
                }
                // line 27
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 31
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>
</div>
";
        }
        // line 34
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 34,  129 => 31,  124 => 28,  118 => 27,  108 => 24,  105 => 23,  95 => 20,  92 => 19,  89 => 18,  85 => 17,  78 => 13,  70 => 12,  65 => 10,  61 => 9,  57 => 8,  52 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/currency.twig", "");
    }
}
