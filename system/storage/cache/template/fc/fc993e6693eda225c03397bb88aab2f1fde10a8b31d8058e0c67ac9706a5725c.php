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

/* extension/dashboard/phpinfo.twig */
class __TwigTemplate_ad2b04b6421abc73e3cd0aa1b47c60bf6e96ef628617a803411476b23f29d3a2 extends \Twig\Template
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
        echo "<div class=\"modal-dialog\" style=\"width: 800px\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\"><i class=\"fa fa-cog\"></i> ";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
      <style type=\"text/css\">
       .modal-dialog body {background-color: #fff; color: #222; font-family: sans-serif;}
       .modal-dialog pre {margin: 0; font-family: monospace;}
       .modal-dialog a:link {color: #009; text-decoration: none; background-color: #fff;}
       .modal-dialog a:hover {text-decoration: underline;}
       .modal-dialog table {border-collapse: collapse; border: 0; width: 763px; box-shadow: 1px 2px 3px #ccc;}
       .modal-dialog .center {text-align: center;}
       .modal-dialog .center table {margin: 1em auto; text-align: left;}
       .modal-dialog .center th {text-align: center !important;}
       .modal-dialog td,.modal-dialog th {border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px;}
       .modal-dialog h1 {font-size: 150%;}
       .modal-dialog h2 {font-size: 125%;}
       .modal-dialog .p {text-align: left;}
       .modal-dialog .e {background-color: #ccf; width: 300px; font-weight: bold;}
       .modal-dialog .h {background-color: #99c; font-weight: bold;}
       .modal-dialog .v {background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;}
       .modal-dialog .v i {color: #999;}
       .modal-dialog img {float: right; border: 0;}
       .modal-dialog hr {width: 763px; background-color: #ccc; border: 0; height: 1px;}
      </style>
      ";
        // line 28
        echo ($context["phpinfo"] ?? null);
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/phpinfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/dashboard/phpinfo.twig", "");
    }
}
