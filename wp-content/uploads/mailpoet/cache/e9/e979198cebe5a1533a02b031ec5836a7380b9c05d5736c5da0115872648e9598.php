<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* newsletter/templates/components/newsletterPreview.hbs */
class __TwigTemplate_488eee38a47279bcc9c2633b8fb3b638bae74e91e569d7498ac17f0d91d3ad56 extends \MailPoetVendor\Twig\Template
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
        echo "<div class=\"mailpoet_browser_preview_link\">
  <a href=\"{{ previewUrl }}\" target=\"_blank\" rel=\"noopener noreferrer\">";
        // line 2
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Open in new tab", "Open email preview in new tab");
        echo "</a>
</div>
<div class=\"mailpoet_browser_preview_toggle\">
  <label>
    <input type=\"radio\" name=\"mailpoet_browser_preview_type\" class=\"mailpoet_browser_preview_type\" value=\"desktop\" {{#ifCond previewType '!=' 'mobile'}}CHECKED{{/ifCond}} />";
        // line 6
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Desktop", "Desktop browser preview mode");
        echo "
  </label>
  <label>
    <input type=\"radio\" name=\"mailpoet_browser_preview_type\" class=\"mailpoet_browser_preview_type\" value=\"mobile\" {{#ifCond previewType '==' 'mobile'}}CHECKED{{/ifCond}} />";
        // line 9
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Mobile", "Mobile browser preview mode");
        echo "
  </label>
</div>
<div class=\"mailpoet_browser_preview_container {{#ifCond previewType '==' 'mobile'}}mailpoet_browser_preview_container_mobile{{else}}mailpoet_browser_preview_container_desktop{{/ifCond}}\">
  <div class=\"mailpoet_browser_preview_border\">
    <iframe id=\"mailpoet_browser_preview_iframe\" class=\"mailpoet_browser_preview_iframe\" src=\"{{ previewUrl }}\" width=\"{{ width }}\" height=\"{{ height }}\"></iframe>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/components/newsletterPreview.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/components/newsletterPreview.hbs", "C:\\wamp64\\www\\les_ecolores\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\components\\newsletterPreview.hbs");
    }
}
