<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* newsletter/templates/blocks/social/settingsIcon.hbs */
class __TwigTemplate_f790fccb0b80dd01750473ea310830128dc4704f1f69e70c1d697c0da5d364a5 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"mailpoet_social_icon_settings\">
    <div class=\"mailpoet_social_icon_settings_tool mailpoet_social_icon_settings_move_icon\">
        <a href=\"javascript:;\" class=\"mailpoet_move_block\">";
        // line 3
        echo \MailPoetVendor\twig_source($this->env, "newsletter/templates/svg/block-tools/move-without-bg.svg");
        echo "</a>
    </div>
    <div class=\"mailpoet_social_icon_settings_tool mailpoet_social_icon_settings_delete_icon\">
        <a href=\"javascript:;\" class=\"mailpoet_delete_block\">";
        // line 6
        echo \MailPoetVendor\twig_source($this->env, "newsletter/templates/svg/block-tools/trash-without-bg.svg");
        echo "</a>
    </div>
    <div class=\"mailpoet_social_icon_settings_row\">
        <label>
        <div class=\"mailpoet_social_icon_settings_label mailpoet_social_icon_image_label\">
            <img src=\"{{ model.image }}\" onerror=\"if (this.src != '{{ allIconSets.default.custom }}') this.src = '{{ allIconSets.default.custom }}';\" alt=\"{{ model.text }}\" class=\"mailpoet_social_icon_image\" />
        </div>
        <div class=\"mailpoet_social_icon_settings_form_element\">
            <select name=\"iconType\" class=\"mailpoet_social_icon_field_type\">
            {{#each iconTypes}}
                <option value=\"{{ iconType }}\" {{#ifCond iconType '==' ../model.iconType}}SELECTED{{/ifCond}}>{{ title }}</option>
            {{/each}}
            </select>
        </div>
        </label>
    </div>

    {{#ifCond iconType '==' 'custom'}}
    <div class=\"mailpoet_social_icon_settings_row\">
        <label>
        <div class=\"mailpoet_social_icon_settings_label\">
            ";
        // line 27
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Image");
        echo "
        </div>
        <div class=\"mailpoet_social_icon_settings_form_element\">
            <input type=\"text\" name=\"image\" class=\"mailpoet_social_icon_field_image\" value=\"{{ model.image }}\" placeholder=\"http://\" />
        </div>
        </label>
    </div>
    {{/ifCond}}

    <div class=\"mailpoet_social_icon_settings_row\">
        <label>
        <div class=\"mailpoet_social_icon_settings_label\">
            {{ currentType.linkFieldName }}
        </div>
        <div class=\"mailpoet_social_icon_settings_form_element\">
            {{#ifCond iconType '==' 'email'}}
            <input type=\"text\" name=\"link\" class=\"mailpoet_social_icon_field_link\" value=\"{{emailFromMailto model.link }}\" placeholder=\"example@example.org\" /><br />
            {{else}}
            <input type=\"text\" name=\"link\" class=\"mailpoet_social_icon_field_link\" value=\"{{ model.link }}\" placeholder=\"http://\" /><br />
            {{/ifCond}}
        </div>
        </label>
    </div>

    {{#ifCond iconType '==' 'custom'}}
    <div class=\"mailpoet_social_icon_settings_row\">
        <label>
        <div class=\"mailpoet_social_icon_settings_label\">
            ";
        // line 55
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Text");
        echo "
        </div>
        <div class=\"mailpoet_social_icon_settings_form_element\">
            <input type=\"text\" name=\"text\" class=\"mailpoet_social_icon_field_text\" value=\"{{ model.text }}\" />
        </div>
        </label>
    </div>
    {{/ifCond}}
</div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/social/settingsIcon.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 55,  64 => 27,  40 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/blocks/social/settingsIcon.hbs", "C:\\wamp64\\www\\les_ecolores\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\blocks\\social\\settingsIcon.hbs");
    }
}
