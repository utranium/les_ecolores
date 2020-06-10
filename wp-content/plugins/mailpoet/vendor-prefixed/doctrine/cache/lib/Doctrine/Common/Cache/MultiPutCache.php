<?php
 namespace MailPoetVendor\Doctrine\Common\Cache; if (!defined('ABSPATH')) exit; interface MultiPutCache { function saveMultiple(array $keysAndValues, $lifetime = 0); } 