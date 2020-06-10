<?php
 namespace MailPoetVendor\Twig\Node; if (!defined('ABSPATH')) exit; use MailPoetVendor\Twig\Compiler; use MailPoetVendor\Twig\Node\Expression\AbstractExpression; use MailPoetVendor\Twig\Node\Expression\ConstantExpression; class DeprecatedNode extends \MailPoetVendor\Twig\Node\Node { public function __construct(\MailPoetVendor\Twig\Node\Expression\AbstractExpression $expr, $lineno, $tag = null) { parent::__construct(['expr' => $expr], [], $lineno, $tag); } public function compile(\MailPoetVendor\Twig\Compiler $compiler) { $compiler->addDebugInfo($this); $expr = $this->getNode('expr'); if ($expr instanceof \MailPoetVendor\Twig\Node\Expression\ConstantExpression) { $compiler->write('@trigger_error(')->subcompile($expr); } else { $varName = $compiler->getVarName(); $compiler->write(\sprintf('$%s = ', $varName))->subcompile($expr)->raw(";\n")->write(\sprintf('@trigger_error($%s', $varName)); } $compiler->raw('.')->string(\sprintf(' ("%s" at line %d).', $this->getTemplateName(), $this->getTemplateLine()))->raw(", E_USER_DEPRECATED);\n"); } } \class_alias('MailPoetVendor\\Twig\\Node\\DeprecatedNode', 'MailPoetVendor\\Twig_Node_Deprecated'); 