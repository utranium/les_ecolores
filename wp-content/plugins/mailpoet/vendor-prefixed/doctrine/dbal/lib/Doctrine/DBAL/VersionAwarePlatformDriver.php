<?php
 namespace MailPoetVendor\Doctrine\DBAL; if (!defined('ABSPATH')) exit; interface VersionAwarePlatformDriver { public function createDatabasePlatformForVersion($version); } 