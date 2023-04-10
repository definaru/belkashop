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

/* extension/dashboard/domovoy_form.twig */
class __TwigTemplate_f99deee8c10761fbca925c02c0e62ed69603d74fe8334a4d063b0bd98a171d40 extends \Twig\Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-dashboard\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-dashboard\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 29
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"dashboard_domovoy_width\" id=\"input-width\" class=\"form-control\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 33
            echo "                ";
            if (($context["column"] == ($context["dashboard_domovoy_width"] ?? null))) {
                // line 34
                echo "                <option value=\"";
                echo $context["column"];
                echo "\" selected=\"selected\">";
                echo $context["column"];
                echo "</option>
                ";
            } else {
                // line 36
                echo "                <option value=\"";
                echo $context["column"];
                echo "\">";
                echo $context["column"];
                echo "</option>
                ";
            }
            // line 38
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 43
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"dashboard_domovoy_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 46
        if (($context["dashboard_domovoy_status"] ?? null)) {
            // line 47
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 48
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 50
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 51
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 53
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 57
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"dashboard_domovoy_sort_order\" value=\"";
        // line 59
        echo ($context["dashboard_domovoy_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
          ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["folders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 63
            echo "          <fieldset>
            <legend>";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 64);
            echo "</legend>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
            // line 66
            echo ($context["entry_folder_cron_status"] ?? null);
            echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"row\">
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["folder"], "cron", [], "any", false, false, false, 70), "status", [], "any", false, false, false, 70)) {
                // line 71
                echo "                      <input type=\"radio\" name=\"dashboard_domovoy_cron[";
                echo twig_get_attribute($this->env, $this->source, $context["folder"], "key", [], "any", false, false, false, 71);
                echo "][status]\" value=\"1\" checked=\"checked\" />
                      ";
                // line 72
                echo ($context["text_yes"] ?? null);
                echo "
                    ";
            } else {
                // line 74
                echo "                      <input type=\"radio\" name=\"dashboard_domovoy_cron[";
                echo twig_get_attribute($this->env, $this->source, $context["folder"], "key", [], "any", false, false, false, 74);
                echo "][status]\" value=\"1\" />
                      ";
                // line 75
                echo ($context["text_yes"] ?? null);
                echo "
                    ";
            }
            // line 76
            echo " </label>
                  <label class=\"radio-inline\"> ";
            // line 77
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["folder"], "cron", [], "any", false, false, false, 77), "status", [], "any", false, false, false, 77)) {
                // line 78
                echo "                      <input type=\"radio\" name=\"dashboard_domovoy_cron[";
                echo twig_get_attribute($this->env, $this->source, $context["folder"], "key", [], "any", false, false, false, 78);
                echo "][status]\" value=\"0\" checked=\"checked\" />
                      ";
                // line 79
                echo ($context["text_no"] ?? null);
                echo "
                    ";
            } else {
                // line 81
                echo "                      <input type=\"radio\" name=\"dashboard_domovoy_cron[";
                echo twig_get_attribute($this->env, $this->source, $context["folder"], "key", [], "any", false, false, false, 81);
                echo "][status]\" value=\"0\" />
                      ";
                // line 82
                echo ($context["text_no"] ?? null);
                echo "
                    ";
            }
            // line 83
            echo "</label>
                </div>
              </div>
            </div>
          </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
            // line 89
            echo ($context["entry_folder_space_limit"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-12\">
                    <input type=\"text\" name=\"dashboard_domovoy_cron[";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["folder"], "key", [], "any", false, false, false, 93);
            echo "][size]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["folder"], "cron", [], "any", false, false, false, 93), "size", [], "any", false, false, false, 93);
            echo "\" placeholder=\"";
            echo ($context["entry_size"] ?? null);
            echo "\" class=\"form-control\" />
                  </div>
                </div>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" >";
            // line 99
            echo ($context["entry_folder_calc_time"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-3\">
                    <input type=\"text\" name=\"dashboard_domovoy_cron[";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["folder"], "key", [], "any", false, false, false, 103);
            echo "][time]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["folder"], "cron", [], "any", false, false, false, 103), "time", [], "any", false, false, false, 103);
            echo "\" placeholder=\"";
            echo ($context["entry_time"] ?? null);
            echo "\" class=\"form-control\" />
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "          <fieldset>
            <legend>";
        // line 111
        echo ($context["text_server"] ?? null);
        echo "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 113
        echo ($context["entry_disk_free_space_limit"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-12\">
                    <input type=\"text\" name=\"dashboard_domovoy_disk_free_space\" value=\"";
        // line 117
        echo ($context["dashboard_domovoy_disk_free_space"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_size"] ?? null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 123
        echo ($context["entry_free_space_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 127
        if (($context["dashboard_domovoy_free_space_status"] ?? null)) {
            // line 128
            echo "                        <input type=\"radio\" name=\"dashboard_domovoy_free_space_status\" value=\"1\" checked=\"checked\" />
                        ";
            // line 129
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 131
            echo "                        <input type=\"radio\" name=\"dashboard_domovoy_free_space_status\" value=\"1\" />
                        ";
            // line 132
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 133
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 134
        if ( !($context["dashboard_domovoy_free_space_status"] ?? null)) {
            // line 135
            echo "                        <input type=\"radio\" name=\"dashboard_domovoy_free_space_status\" value=\"0\" checked=\"checked\" />
                        ";
            // line 136
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 138
            echo "                        <input type=\"radio\" name=\"dashboard_domovoy_free_space_status\" value=\"0\" />
                        ";
            // line 139
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 140
        echo "</label>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 147
        echo ($context["text_check_function"] ?? null);
        echo "</legend>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-valide-params\">";
        // line 149
        echo ($context["entry_danger_funtions"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"dashboard_domovoy_danger_funtions\" rows=10\" placeholder=\"";
        // line 151
        echo ($context["entry_danger_funtions"] ?? null);
        echo "\" id=\"input-valide-params\" class=\"form-control\">";
        echo ($context["dashboard_domovoy_danger_funtions"] ?? null);
        echo "</textarea>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-valide-params\">";
        // line 155
        echo ($context["entry_warning_funtions"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"dashboard_domovoy_warning_funtions\" rows=10\" placeholder=\"";
        // line 157
        echo ($context["entry_warning_funtions"] ?? null);
        echo "\" id=\"input-valide-params\" class=\"form-control\">";
        echo ($context["dashboard_domovoy_warning_funtions"] ?? null);
        echo "</textarea>
            </div>
          </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<div style=\"text-align: center\"> <b>";
        // line 166
        echo ($context["text_copyright"] ?? null);
        echo "</b> </div>
";
        // line 167
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/dashboard/domovoy_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 167,  432 => 166,  418 => 157,  413 => 155,  404 => 151,  399 => 149,  394 => 147,  385 => 140,  380 => 139,  377 => 138,  372 => 136,  369 => 135,  367 => 134,  364 => 133,  359 => 132,  356 => 131,  351 => 129,  348 => 128,  346 => 127,  339 => 123,  328 => 117,  321 => 113,  316 => 111,  313 => 110,  296 => 103,  289 => 99,  276 => 93,  269 => 89,  261 => 83,  256 => 82,  251 => 81,  246 => 79,  241 => 78,  239 => 77,  236 => 76,  231 => 75,  226 => 74,  221 => 72,  216 => 71,  214 => 70,  207 => 66,  202 => 64,  199 => 63,  195 => 62,  187 => 59,  182 => 57,  176 => 53,  171 => 51,  166 => 50,  161 => 48,  156 => 47,  154 => 46,  148 => 43,  142 => 39,  136 => 38,  128 => 36,  120 => 34,  117 => 33,  113 => 32,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/dashboard/domovoy_form.twig", "");
    }
}
