<?php
 namespace MailPoetVendor\Twig\TokenParser; if (!defined('ABSPATH')) exit; use MailPoetVendor\Twig\Error\SyntaxError; use MailPoetVendor\Twig\Parser; use MailPoetVendor\Twig\Token; interface TokenParserInterface { public function setParser(\MailPoetVendor\Twig\Parser $parser); public function parse(\MailPoetVendor\Twig\Token $token); public function getTag(); } \class_alias('MailPoetVendor\\Twig\\TokenParser\\TokenParserInterface', 'MailPoetVendor\\Twig_TokenParserInterface'); \class_exists('MailPoetVendor\\Twig\\Token'); \class_exists('MailPoetVendor\\Twig\\Parser'); 