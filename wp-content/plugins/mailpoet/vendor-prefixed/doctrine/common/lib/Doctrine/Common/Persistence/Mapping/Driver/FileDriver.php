<?php
 namespace MailPoetVendor\Doctrine\Common\Persistence\Mapping\Driver; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\Common\Persistence\Mapping\MappingException; abstract class FileDriver implements \MailPoetVendor\Doctrine\Common\Persistence\Mapping\Driver\MappingDriver { protected $locator; protected $classCache; protected $globalBasename; public function __construct($locator, $fileExtension = null) { if ($locator instanceof \MailPoetVendor\Doctrine\Common\Persistence\Mapping\Driver\FileLocator) { $this->locator = $locator; } else { $this->locator = new \MailPoetVendor\Doctrine\Common\Persistence\Mapping\Driver\DefaultFileLocator((array) $locator, $fileExtension); } } public function setGlobalBasename($file) { $this->globalBasename = $file; } public function getGlobalBasename() { return $this->globalBasename; } public function getElement($className) { if ($this->classCache === null) { $this->initialize(); } if (isset($this->classCache[$className])) { return $this->classCache[$className]; } $result = $this->loadMappingFile($this->locator->findMappingFile($className)); if (!isset($result[$className])) { throw \MailPoetVendor\Doctrine\Common\Persistence\Mapping\MappingException::invalidMappingFile($className, \str_replace('\\', '.', $className) . $this->locator->getFileExtension()); } $this->classCache[$className] = $result[$className]; return $result[$className]; } public function isTransient($className) { if ($this->classCache === null) { $this->initialize(); } if (isset($this->classCache[$className])) { return \false; } return !$this->locator->fileExists($className); } public function getAllClassNames() { if ($this->classCache === null) { $this->initialize(); } if (!$this->classCache) { return (array) $this->locator->getAllClassNames($this->globalBasename); } return \array_merge(\array_keys($this->classCache), (array) $this->locator->getAllClassNames($this->globalBasename)); } protected abstract function loadMappingFile($file); protected function initialize() { $this->classCache = []; if (null !== $this->globalBasename) { foreach ($this->locator->getPaths() as $path) { $file = $path . '/' . $this->globalBasename . $this->locator->getFileExtension(); if (\is_file($file)) { $this->classCache = \array_merge($this->classCache, $this->loadMappingFile($file)); } } } } public function getLocator() { return $this->locator; } public function setLocator(\MailPoetVendor\Doctrine\Common\Persistence\Mapping\Driver\FileLocator $locator) { $this->locator = $locator; } } 