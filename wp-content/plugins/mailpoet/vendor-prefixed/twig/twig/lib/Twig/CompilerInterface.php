<?php
 namespace MailPoetVendor; if (!defined('ABSPATH')) exit; interface Twig_CompilerInterface { public function compile(\MailPoetVendor\Twig_NodeInterface $node); public function getSource(); } 