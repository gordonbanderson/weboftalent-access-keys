<?php 
Object::add_extension('SiteTree', 'AccessKeyExtension');
Object::add_extension("Page_Controller","AccessKeysControllerExtension");
DataObject::add_extension('SiteConfig', 'AccessKeysSiteConfig');
?>