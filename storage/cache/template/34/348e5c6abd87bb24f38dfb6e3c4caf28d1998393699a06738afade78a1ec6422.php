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

/* marketplace/opencartforum_info.twig */
class __TwigTemplate_bcb8abf535f3ec06294f1a7b431f9e04adc8ae6a574b20ba70549d1f530bcdae extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div id=\"marketplace-extension-info\" class=\"container-fluid\">";
        // line 14
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 19
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 21
        echo ($context["name"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"row extension-info\">
          <div class=\"col-sm-8\">";
        // line 25
        if (($context["banner"] ?? null)) {
            // line 26
            echo "            <div id=\"banner\" class=\"text-center thumbnail\"><img src=\"";
            echo ($context["banner"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></div>
            ";
        }
        // line 28
        echo "            <div class=\"row thumbnails\">";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 29
            echo "              <div class=\"col-xs-4 col-sm-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 29);
            echo "\" class=\"thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 29);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 29);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 29);
            echo "\" class=\"img-responsive\" /></a></div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo " </div>
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-changelog\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_changelog"] ?? null);
        echo "</a></li>
            </ul>
            <div class=\"tab-content\">
              <div id=\"tab-description\" class=\"tab-pane active\">";
        // line 36
        echo ($context["description"] ?? null);
        echo "</div>
              <div id=\"tab-changelog\" class=\"tab-pane\">";
        // line 37
        echo ($context["changelog"] ?? null);
        echo "</div>
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div id=\"buy\" class=\"well\">";
        // line 41
        if (((($context["license"] ?? null) == "1") &&  !($context["purchased"] ?? null))) {
            // line 42
            echo "              <a target=\"_blank\" href=\"";
            echo ($context["extension_url"] ?? null);
            echo "?utm_source=ocstore_marketplace\" id=\"button-buy\" class=\"btn btn-success btn-lg btn-block\">";
            echo ($context["button_purchase"] ?? null);
            echo "</a>
              ";
        }
        // line 44
        echo "              <div id=\"price\" class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 45
        echo ($context["text_price"] ?? null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 46
        if (($context["license"] ?? null)) {
            // line 47
            echo "                  ";
            echo ($context["price"] ?? null);
            echo "
                  ";
        } else {
            // line 49
            echo "                  ";
            echo ($context["text_free"] ?? null);
            echo "
                  ";
        }
        // line 50
        echo "</div>
              </div>
              <hr>
              <ul class=\"list-check\">
                  ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cfields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 55
            echo "                    <li>";
            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 55);
            echo ": ";
            echo twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 55);
            echo "</li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "              </ul>
              <hr>
              <div class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 60
        echo ($context["text_rating"] ?? null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 62
            echo "                  ";
            if ((($context["rating"] ?? null) >= $context["i"])) {
                echo "<i class=\"fa fa-star\"></i>";
            } else {
                echo "<i class=\"fa fa-star-o\"></i>";
            }
            // line 63
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " (";
        echo ($context["rating_total"] ?? null);
        echo ")</div>
              </div>
              <hr>
              <div class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 67
        echo ($context["text_date_modified"] ?? null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 68
        echo ($context["date_modified"] ?? null);
        echo "</div>
              </div>
              <hr>
              <div class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 72
        echo ($context["text_date_added"] ?? null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 73
        echo ($context["date_added"] ?? null);
        echo "</div>
              </div>
            </div>
            <div id=\"sales\" class=\"well\"><i class=\"opencart-icon-cart-mini\"></i> <strong>";
        // line 76
        echo ($context["sales"] ?? null);
        echo "</strong> ";
        echo ($context["text_sales"] ?? null);
        echo "</div>
            <div id=\"sales\" class=\"well\"><i class=\"opencart-icon-cart-mini\"></i> <strong>";
        // line 77
        echo ($context["downloaded"] ?? null);
        echo "</strong> ";
        echo ($context["text_downloaded"] ?? null);
        echo "</div>
            <div class=\"well\">
              <div class=\"media\">
                <div class=\"media-left media-middle\"><img src=\"";
        // line 80
        echo ($context["member_image"] ?? null);
        echo "\" alt=\"";
        echo ($context["member_username"] ?? null);
        echo "\" title=\"";
        echo ($context["member_username"] ?? null);
        echo "\" class=\"media-object img-circle\"></div>
                <div class=\"media-body\"> <span><a target=\"_blank\" href=\"";
        // line 81
        echo ($context["member_url"] ?? null);
        echo "\">";
        echo ($context["member_username"] ?? null);
        echo "</a></span><br>
                  <small>";
        // line 82
        echo ($context["text_member_since"] ?? null);
        echo " ";
        echo ($context["member_date_added"] ?? null);
        echo "</small></div>
              </div>
              <br />
              <a href=\"";
        // line 85
        echo ($context["filter_member"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_view_all"] ?? null);
        echo "</a> <a href=\"https://opencartforum.com/topic/";
        echo ($context["topicid"] ?? null);
        echo "-";
        echo ($context["topicseoname"] ?? null);
        echo "\" target=\"_blank\" class=\"btn btn-ghost-dark btn-lg btn-block\">";
        echo ($context["button_get_support"] ?? null);
        echo "</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
function next(url, element, i) {
\ti = i + 1;

\t\$.ajax({
\t\turl: url,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#progress-bar').css('width', (i * 20) + '%');

\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');
\t\t\t}
\t\t\t
\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tnext(json['next'], element, i);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}
//--></script> 
  <script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled:true
\t\t}
\t});
});
//--></script> 
</div>
";
        // line 137
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "marketplace/opencartforum_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 137,  296 => 85,  288 => 82,  282 => 81,  274 => 80,  266 => 77,  260 => 76,  254 => 73,  250 => 72,  243 => 68,  239 => 67,  226 => 63,  219 => 62,  215 => 61,  211 => 60,  206 => 57,  195 => 55,  191 => 54,  185 => 50,  179 => 49,  173 => 47,  171 => 46,  167 => 45,  164 => 44,  156 => 42,  154 => 41,  147 => 37,  143 => 36,  137 => 33,  133 => 32,  129 => 30,  114 => 29,  109 => 28,  99 => 26,  97 => 25,  90 => 21,  86 => 19,  78 => 15,  76 => 14,  71 => 11,  60 => 9,  56 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/opencartforum_info.twig", "");
    }
}
