<?php
 namespace MailPoetVendor\Doctrine\Common\Cache; if (!defined('ABSPATH')) exit; interface MultiGetCache { function fetchMultiple(array $keys); } 