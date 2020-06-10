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

/* newsletter/templates/blocks/automatedLatestContent/settings.hbs */
class __TwigTemplate_2ac6e76be24b19743e4212570167e91e86b73f041de65baf2d14ed7b11a6fe13 extends \MailPoetVendor\Twig\Template
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
        echo "<h3>";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Post selection");
        echo "</h3>

<div class=\"mailpoet_form_field\">
    <div class=\"mailpoet_form_field_title mailpoet_form_field_title_inline\">";
        // line 4
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Show max:");
        echo "</div>
    <div class=\"mailpoet_form_field_input_option\">
        <input type=\"text\" class=\"mailpoet_input mailpoet_input_small mailpoet_automated_latest_content_show_amount\" value=\"{{ model.amount }}\" maxlength=\"2\" size=\"2\" />
        <select class=\"mailpoet_select mailpoet_select_large mailpoet_automated_latest_content_content_type\">
            <option value=\"post\" {{#ifCond model.contentType '==' 'post'}}SELECTED{{/ifCond}}>";
        // line 8
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Posts");
        echo "</option>
            <option value=\"page\" {{#ifCond model.contentType '==' 'page'}}SELECTED{{/ifCond}}>";
        // line 9
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Pages");
        echo "</option>
            <option value=\"mailpoet_page\" {{#ifCond model.contentType '==' 'mailpoet_page'}}SELECTED{{/ifCond}}>";
        // line 10
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("MailPoet pages");
        echo "</option>
        </select>
    </div>
</div>

<div class=\"mailpoet_form_field\">
    <div class=\"mailpoet_form_field_select_option\">
        <select class=\"mailpoet_select mailpoet_automated_latest_content_categories_and_tags\" multiple=\"multiple\">
          {{#each model.terms}}
            <option value=\"{{ id }}\" selected=\"selected\">{{ text }}</option>
          {{/each}}
        </select>
    </div>
    <div class=\"mailpoet_form_field_radio_option\">
        <label>
            <input type=\"radio\" name=\"mailpoet_automated_latest_content_include_or_exclude\" class=\"mailpoet_automated_latest_content_include_or_exclude\" value=\"include\" {{#ifCond model.inclusionType '==' 'include'}}CHECKED{{/ifCond}}/>
            ";
        // line 26
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Include");
        echo "
        </label>
    </div>
    <div class=\"mailpoet_form_field_radio_option\">
        <label>
            <input type=\"radio\" name=\"mailpoet_automated_latest_content_include_or_exclude\" class=\"mailpoet_automated_latest_content_include_or_exclude\" value=\"exclude\" {{#ifCond model.inclusionType '==' 'exclude'}}CHECKED{{/ifCond}} />
            ";
        // line 32
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Exclude");
        echo "
        </label>
    </div>
</div>

<hr class=\"mailpoet_separator\" />


<div class=\"mailpoet_form_field\">
    <a href=\"javascript:;\" class=\"mailpoet_automated_latest_content_show_display_options\">";
        // line 41
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Display options");
        echo "</a>
</div>
<div class=\"mailpoet_automated_latest_content_display_options mailpoet_closed\">
    <div class=\"mailpoet_form_field\">
        <a href=\"javascript:;\" class=\"mailpoet_automated_latest_content_hide_display_options\">";
        // line 45
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Hide display options");
        echo "</a>
    </div>

    <div class=\"mailpoet_form_field\">
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_display_type\" class=\"mailpoet_automated_latest_content_display_type\" value=\"excerpt\" {{#ifCond model.displayType '==' 'excerpt'}}CHECKED{{/ifCond}}/>
                ";
        // line 52
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Excerpt");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_display_type\" class=\"mailpoet_automated_latest_content_display_type\" value=\"full\" {{#ifCond model.displayType '==' 'full'}}CHECKED{{/ifCond}}/>
                ";
        // line 58
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Full post");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_display_type\" class=\"mailpoet_automated_latest_content_display_type\" value=\"titleOnly\" {{#ifCond model.displayType '==' 'titleOnly'}}CHECKED{{/ifCond}} />
                ";
        // line 64
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Title only");
        echo "
            </label>
        </div>
    </div>

    <div class=\"mailpoet_form_field\">
        <div class=\"mailpoet_form_field_title\">";
        // line 70
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Title Format");
        echo "</div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_title_format\" class=\"mailpoet_automated_latest_content_title_format\" value=\"h1\" {{#ifCond model.titleFormat '==' 'h1'}}CHECKED{{/ifCond}}/>
                ";
        // line 74
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Heading 1");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_title_format\" class=\"mailpoet_automated_latest_content_title_format\" value=\"h2\" {{#ifCond model.titleFormat '==' 'h2'}}CHECKED{{/ifCond}}/>
                ";
        // line 80
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Heading 2");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_title_format\" class=\"mailpoet_automated_latest_content_title_format\" value=\"h3\" {{#ifCond model.titleFormat '==' 'h3'}}CHECKED{{/ifCond}}/>
                ";
        // line 86
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Heading 3");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option mailpoet_automated_latest_content_title_as_list {{#ifCond model.displayType '!=' 'titleOnly'}}mailpoet_hidden{{/ifCond}}\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_title_format\" class=\"mailpoet_automated_latest_content_title_format\" value=\"ul\" {{#ifCond model.titleFormat '==' 'ul'}}CHECKED{{/ifCond}}/>
                ";
        // line 92
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Show as list");
        echo "
            </label>
        </div>
    </div>

    <div class=\"mailpoet_form_field\">
        <div class=\"mailpoet_form_field_title\">";
        // line 98
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Title Alignment");
        echo "</div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_title_alignment\" class=\"mailpoet_automated_latest_content_title_alignment\" value=\"left\" {{#ifCond model.titleAlignment '==' 'left'}}CHECKED{{/ifCond}} />
                ";
        // line 102
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Left");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_title_alignment\" class=\"mailpoet_automated_latest_content_title_alignment\" value=\"center\" {{#ifCond model.titleAlignment '==' 'center'}}CHECKED{{/ifCond}} />
                ";
        // line 108
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Center");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_title_alignment\" class=\"mailpoet_automated_latest_content_title_alignment\" value=\"right\" {{#ifCond model.titleAlignment '==' 'right'}}CHECKED{{/ifCond}} />
                ";
        // line 114
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Right");
        echo "
            </label>
        </div>
    </div>

    <div class=\"mailpoet_form_field mailpoet_automated_latest_content_title_as_link {{#ifCond model.titleFormat '===' 'ul'}}mailpoet_hidden{{/ifCond}}\">
        <div class=\"mailpoet_form_field_title\">";
        // line 120
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Title as links");
        echo "</div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_title_as_links\" class=\"mailpoet_automated_latest_content_title_as_links\" value=\"true\" {{#if model.titleIsLink}}CHECKED{{/if}}/>
                ";
        // line 124
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_title_as_links\" class=\"mailpoet_automated_latest_content_title_as_links\" value=\"false\" {{#unless model.titleIsLink}}CHECKED{{/unless}}/>
                ";
        // line 130
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
            </label>
        </div>
    </div>

    <hr class=\"mailpoet_separator mailpoet_automated_latest_content_image_separator {{#ifCond model.displayType '===' 'titleOnly'}}mailpoet_hidden{{/ifCond}}\" />

    <div class=\"mailpoet_form_field mailpoet_automated_latest_content_featured_image_position_container {{#ifCond model.displayType '!==' 'excerpt'}}mailpoet_hidden{{/ifCond}}\">
        <div class=\"mailpoet_form_field_title\">";
        // line 138
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Featured image position");
        echo "</div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_featured_image_position\" class=\"mailpoet_automated_latest_content_featured_image_position\" value=\"belowTitle\" {{#ifCond model.featuredImagePosition '==' 'belowTitle' }}CHECKED{{/ifCond}}/>
                ";
        // line 142
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Below title");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_featured_image_position\" class=\"mailpoet_automated_latest_content_featured_image_position\" value=\"aboveTitle\" {{#ifCond model.featuredImagePosition '==' 'aboveTitle' }}CHECKED{{/ifCond}}/>
                ";
        // line 148
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Above title");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_featured_image_position\" class=\"mailpoet_automated_latest_content_featured_image_position\" value=\"none\" {{#ifCond model.featuredImagePosition '==' 'none' }}CHECKED{{/ifCond}}/>
                ";
        // line 154
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("None");
        echo "
            </label>
        </div>
    </div>

    <div class=\"mailpoet_automated_latest_content_non_title_list_options {{#ifCond model.displayType '==' 'titleOnly'}}{{#ifCond model.titleFormat '==' 'ul'}}mailpoet_hidden{{/ifCond}}{{/ifCond}}\">
        <div class=\"mailpoet_form_field mailpoet_automated_latest_content_image_full_width_option {{#ifCond model.displayType '==' 'titleOnly'}}mailpoet_hidden{{/ifCond}}\">
            <div class=\"mailpoet_form_field_title\">";
        // line 161
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Image width");
        echo "</div>
            <div class=\"mailpoet_form_field_radio_option\">
                <label>
                    <input type=\"radio\" name=\"imageFullWidth\" class=\"mailpoet_automated_latest_content_image_full_width\" value=\"true\" {{#if model.imageFullWidth}}CHECKED{{/if}}/>
                    ";
        // line 165
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Full width");
        echo "
                </label>
            </div>
            <div class=\"mailpoet_form_field_radio_option\">
                <label>
                    <input type=\"radio\" name=\"imageFullWidth\" class=\"mailpoet_automated_latest_content_image_full_width\" value=\"false\" {{#unless model.imageFullWidth}}CHECKED{{/unless}}/>
                    ";
        // line 171
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Padded");
        echo "
                </label>
            </div>
        </div>

        <hr class=\"mailpoet_separator\" />

        <div class=\"mailpoet_form_field\">
            <div class=\"mailpoet_form_field_title\">";
        // line 179
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Show author");
        echo "</div>
            <div class=\"mailpoet_form_field_radio_option\">
                <label>
                    <input type=\"radio\" name=\"mailpoet_automated_latest_content_show_author\" class=\"mailpoet_automated_latest_content_show_author\" value=\"no\" {{#ifCond model.showAuthor '==' 'no'}}CHECKED{{/ifCond}}/>
                    ";
        // line 183
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
                </label>
            </div>
            <div class=\"mailpoet_form_field_radio_option\">
                <label>
                    <input type=\"radio\" name=\"mailpoet_automated_latest_content_show_author\" class=\"mailpoet_automated_latest_content_show_author\" value=\"aboveText\" {{#ifCond model.showAuthor '==' 'aboveText'}}CHECKED{{/ifCond}}/>
                    ";
        // line 189
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Above text");
        echo "
                </label>
            </div>
            <div class=\"mailpoet_form_field_radio_option\">
                <label>
                    <input type=\"radio\" name=\"mailpoet_automated_latest_content_show_author\" class=\"mailpoet_automated_latest_content_show_author\" value=\"belowText\" {{#ifCond model.showAuthor '==' 'belowText'}}CHECKED{{/ifCond}}/>
                    ";
        // line 195
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Below text");
        echo "<br />
                </label>
            </div>
            <div class=\"mailpoet_form_field_title mailpoet_form_field_title_small\">";
        // line 198
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preceded by:");
        echo "</div>
            <div class=\"mailpoet_form_field_input_option mailpoet_form_field_block\">
                <input type=\"text\" class=\"mailpoet_input mailpoet_input_full mailpoet_automated_latest_content_author_preceded_by\" value=\"{{ model.authorPrecededBy }}\" />
            </div>
        </div>

        <div class=\"mailpoet_form_field\">
            <div class=\"mailpoet_form_field_title\">";
        // line 205
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Show categories");
        echo "</div>
            <div class=\"mailpoet_form_field_radio_option\">
                <label>
                    <input type=\"radio\" name=\"mailpoet_automated_latest_content_show_categories\" class=\"mailpoet_automated_latest_content_show_categories\" value=\"no\" {{#ifCond model.showCategories '==' 'no'}}CHECKED{{/ifCond}}/>
                    ";
        // line 209
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
                </label>
            </div>
            <div class=\"mailpoet_form_field_radio_option\">
                <label>
                    <input type=\"radio\" name=\"mailpoet_automated_latest_content_show_categories\" class=\"mailpoet_automated_latest_content_show_categories\" value=\"aboveText\" {{#ifCond model.showCategories '==' 'aboveText'}}CHECKED{{/ifCond}}/>
                    ";
        // line 215
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Above text");
        echo "
                </label>
            </div>
            <div class=\"mailpoet_form_field_radio_option\">
                <label>
                    <input type=\"radio\" name=\"mailpoet_automated_latest_content_show_categories\" class=\"mailpoet_automated_latest_content_show_categories\" value=\"belowText\" {{#ifCond model.showCategories '==' 'belowText'}}CHECKED{{/ifCond}}/>
                    ";
        // line 221
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Below text");
        echo "
                </label>
            </div>
            <div class=\"mailpoet_form_field_title mailpoet_form_field_title_small\">";
        // line 224
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preceded by:");
        echo "</div>
            <div class=\"mailpoet_form_field_input_option mailpoet_form_field_block\">
                <input type=\"text\" class=\"mailpoet_input mailpoet_input_full mailpoet_automated_latest_content_categories\" value=\"{{ model.categoriesPrecededBy }}\" />
            </div>
        </div>

        <hr class=\"mailpoet_separator\" />

        <div class=\"mailpoet_form_field\">
            <div class=\"mailpoet_form_field_title mailpoet_form_field_title_small\">";
        // line 233
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("\"Read more\" text");
        echo "</div>
            <div class=\"mailpoet_form_field_radio_option\">
                <label>
                    <input type=\"radio\" name=\"mailpoet_automated_latest_content_read_more_type\" class=\"mailpoet_automated_latest_content_read_more_type\" value=\"link\" {{#ifCond model.readMoreType '==' 'link'}}CHECKED{{/ifCond}}/>
                    ";
        // line 237
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link");
        echo "
                </label>
            </div>
            <div class=\"mailpoet_form_field_radio_option\">
                <label>
                    <input type=\"radio\" name=\"mailpoet_automated_latest_content_read_more_type\" class=\"mailpoet_automated_latest_content_read_more_type\" value=\"button\" {{#ifCond model.readMoreType '==' 'button'}}CHECKED{{/ifCond}}/>
                    ";
        // line 243
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Button");
        echo "
                </label>
            </div>

            <div class=\"mailpoet_form_field_input_option mailpoet_form_field_block\">
                <input type=\"text\" class=\"mailpoet_input mailpoet_input_full mailpoet_automated_latest_content_read_more_text {{#ifCond model.readMoreType '!=' 'link'}}mailpoet_hidden{{/ifCond}}\" value=\"{{ model.readMoreText }}\" />
            </div>

            <div class=\"mailpoet_form_field_input_option mailpoet_form_field_block\">
                <a href=\"javascript:;\" class=\"mailpoet_automated_latest_content_select_button {{#ifCond model.readMoreType '!=' 'button'}}mailpoet_hidden{{/ifCond}}\">";
        // line 252
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Design a button");
        echo "</a>
            </div>
        </div>

        <hr class=\"mailpoet_separator\" />
    </div>

    <div class=\"mailpoet_form_field\">
        <div class=\"mailpoet_form_field_title mailpoet_form_field_title_small\">";
        // line 260
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sort by");
        echo "</div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_sort_by\" class=\"mailpoet_automated_latest_content_sort_by\" value=\"newest\" {{#ifCond model.sortBy '==' 'newest'}}CHECKED{{/ifCond}}/>
                ";
        // line 264
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newest");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_automated_latest_content_sort_by\" class=\"mailpoet_automated_latest_content_sort_by\" value=\"oldest\" {{#ifCond model.sortBy '==' 'oldest'}}CHECKED{{/ifCond}}/>
                ";
        // line 270
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Oldest");
        echo "
            </label>
        </div>
    </div>

    <div class=\"mailpoet_automated_latest_content_non_title_list_options {{#ifCond model.displayType '==' 'titleOnly'}}{{#ifCond model.titleFormat '==' 'ul'}}mailpoet_hidden{{/ifCond}}{{/ifCond}}\">
        <div class=\"mailpoet_form_field\">
            <div class=\"mailpoet_form_field_title mailpoet_form_field_title_small\">";
        // line 277
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Show divider between posts");
        echo "</div>
            <div class=\"mailpoet_form_field_radio_option\">
                <label>
            <input type=\"radio\" name=\"mailpoet_automated_latest_content_show_divider\"class=\"mailpoet_automated_latest_content_show_divider\" value=\"true\" {{#if model.showDivider}}CHECKED{{/if}}/>
                    ";
        // line 281
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
                </label>
            </div>
            <div class=\"mailpoet_form_field_radio_option\">
                <label>
                    <input type=\"radio\" name=\"mailpoet_automated_latest_content_show_divider\"class=\"mailpoet_automated_latest_content_show_divider\" value=\"false\" {{#unless model.showDivider}}CHECKED{{/unless}}/>
                    ";
        // line 287
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
                </label>
            </div>
            <div>
                <a href=\"javascript:;\" class=\"mailpoet_automated_latest_content_select_divider\">";
        // line 291
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select divider");
        echo "</a>
            </div>
        </div>

    </div>
</div>

<div class=\"mailpoet_form_field\">
    <input type=\"button\" class=\"button button-primary mailpoet_done_editing\" value=\"";
        // line 299
        echo \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Done"), "html_attr");
        echo "\" />
</div>

";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/automatedLatestContent/settings.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 299,  474 => 291,  467 => 287,  458 => 281,  451 => 277,  441 => 270,  432 => 264,  425 => 260,  414 => 252,  402 => 243,  393 => 237,  386 => 233,  374 => 224,  368 => 221,  359 => 215,  350 => 209,  343 => 205,  333 => 198,  327 => 195,  318 => 189,  309 => 183,  302 => 179,  291 => 171,  282 => 165,  275 => 161,  265 => 154,  256 => 148,  247 => 142,  240 => 138,  229 => 130,  220 => 124,  213 => 120,  204 => 114,  195 => 108,  186 => 102,  179 => 98,  170 => 92,  161 => 86,  152 => 80,  143 => 74,  136 => 70,  127 => 64,  118 => 58,  109 => 52,  99 => 45,  92 => 41,  80 => 32,  71 => 26,  52 => 10,  48 => 9,  44 => 8,  37 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/blocks/automatedLatestContent/settings.hbs", "C:\\wamp64\\www\\les_ecolores\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\blocks\\automatedLatestContent\\settings.hbs");
    }
}
