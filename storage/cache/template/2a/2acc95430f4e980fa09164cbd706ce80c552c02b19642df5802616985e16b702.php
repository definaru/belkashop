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

/* default/template/common/header.twig */
class __TwigTemplate_dd1f13682fbb33386492cbed1b109d1eaf2fdf857e448c580f174112f8127523 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo ($context["lang"] ?? null);
        echo "\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
    ";
        // line 8
        if (($context["robots"] ?? null)) {
            // line 9
            echo "    <meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
    ";
        }
        // line 11
        echo "    <base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
    ";
        // line 12
        if (($context["description"] ?? null)) {
            // line 13
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
    ";
        }
        // line 15
        echo "    ";
        if (($context["keywords"] ?? null)) {
            // line 16
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
    ";
        }
        // line 18
        echo "    <meta property=\"og:title\" content=\"";
        echo ($context["title"] ?? null);
        echo "\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"";
        // line 20
        echo ($context["og_url"] ?? null);
        echo "\" />
    ";
        // line 21
        if (($context["og_image"] ?? null)) {
            // line 22
            echo "    <meta property=\"og:image\" content=\"";
            echo ($context["og_image"] ?? null);
            echo "\" />
    ";
        } else {
            // line 24
            echo "    <meta property=\"og:image\" content=\"";
            echo ($context["logo"] ?? null);
            echo "\" />
    ";
        }
        // line 26
        echo "    <meta property=\"og:site_name\" content=\"";
        echo ($context["name"] ?? null);
        echo "\" />
    <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
    <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
    <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"catalog/view/theme/default/stylesheet/stylesheet.css?v2\" rel=\"stylesheet\">
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 34
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 34);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 34);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 34);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 37
            echo "    <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 41
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 41);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 41);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 44
            echo "    ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</head>
<body>
<div id=\"mySidenav\" class=\"sidenav\">
    <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
    ";
        // line 50
        echo ($context["menu"] ?? null);
        echo "
</div>
<div id=\"main\">
<div class=\"bg-belka\">
<nav id=\"top\">
    <div class=\"container\">
\t    ";
        // line 56
        echo ($context["currency"] ?? null);
        echo "
        ";
        // line 57
        echo ($context["language"] ?? null);
        echo "
\t  <!-- blog_menu -->
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
        <li><a href=\"";
        // line 61
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>
        <!--
        <li>
            <a href=\"";
        // line 64
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\">
                <i class=\"fa fa-share\"></i> 
                <span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 66
        echo ($context["text_checkout"] ?? null);
        echo "</span>
            </a>
        </li>        
        -->

      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
\t\t<div id=\"logo\">
            <span onclick=\"openNav()\">&#9776;</span>
          ";
        // line 81
        if (($context["logo"] ?? null)) {
            // line 82
            echo "            ";
            if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
                // line 83
                echo "              <img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" style=\"width:150px\" class=\"img-responsive\" />
            ";
            } else {
                // line 85
                echo "              <a href=\"";
                echo ($context["home"] ?? null);
                echo "\">
                <img src=\"";
                // line 86
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" style=\"width:150px\" class=\"img-responsive\" />
              </a>
            ";
            }
            // line 89
            echo "          ";
        } else {
            // line 90
            echo "            <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 92
        echo "\t\t</div>
      </div>
      <div class=\"col-sm-5\">";
        // line 94
        echo ($context["search"] ?? null);
        echo "</div>
      <div class=\"col-sm-3\">
        <ul class=\"right-menu\">
            <li class=\"dropdown\">
                <a href=\"";
        // line 98
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"btn bg-transparent dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-user\"></i> 
                    ";
        // line 101
        echo "                    <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                    ";
        // line 104
        if (($context["logged"] ?? null)) {
            // line 105
            echo "                    <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                    <li><a href=\"";
            // line 106
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
                    <li><a href=\"";
            // line 107
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
                    <li><a href=\"";
            // line 108
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
                    <li><a href=\"";
            // line 109
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
                    ";
        } else {
            // line 111
            echo "                    <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
                    <li><a href=\"";
            // line 112
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
                    ";
        }
        // line 114
        echo "                </ul>
            </li>
            <li>
                <a href=\"";
        // line 117
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"btn bg-transparent\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
                    <i class=\"fa fa-heart\"></i> 
                    ";
        // line 120
        echo "                </a>
            </li>
            ";
        // line 128
        echo "            <li>";
        echo ($context["cart"] ?? null);
        echo "</li>
        </ul>
      </div>
    </div>
  </div>
</header>

</div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 128,  363 => 120,  356 => 117,  351 => 114,  344 => 112,  337 => 111,  330 => 109,  324 => 108,  318 => 107,  312 => 106,  305 => 105,  303 => 104,  298 => 101,  291 => 98,  284 => 94,  280 => 92,  272 => 90,  269 => 89,  259 => 86,  254 => 85,  244 => 83,  241 => 82,  239 => 81,  221 => 66,  214 => 64,  206 => 61,  199 => 57,  195 => 56,  186 => 50,  180 => 46,  171 => 44,  166 => 43,  155 => 41,  151 => 40,  148 => 39,  139 => 37,  134 => 36,  121 => 34,  117 => 33,  106 => 26,  100 => 24,  94 => 22,  92 => 21,  88 => 20,  82 => 18,  76 => 16,  73 => 15,  67 => 13,  65 => 12,  60 => 11,  54 => 9,  52 => 8,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
