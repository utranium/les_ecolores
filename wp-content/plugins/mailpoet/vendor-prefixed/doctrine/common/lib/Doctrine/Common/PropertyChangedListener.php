<?php
 namespace MailPoetVendor\Doctrine\Common; if (!defined('ABSPATH')) exit; interface PropertyChangedListener { function propertyChanged($sender, $propertyName, $oldValue, $newValue); } 