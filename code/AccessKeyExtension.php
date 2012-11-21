<?php


/*
Template override extension for the model
1) Adds an optional access key field
*/
class AccessKeyExtension extends DataExtension {


  public static $db = array( 
        'AccessKey' => 'VarChar(1)'
  );


  public function updateCMSFields( FieldList $fields ) {
    $tf = new TextField('AccessKey');
    $tf->setMaxLength(1);
    $fields->addFieldToTab('Root.Accessibility', $tf);
    $fields->renameField("AccessKey", _t('AccessKey.CMS_FIELD_INFO'));
  }

}

class AccessKeysControllerExtension extends Extension {

  /*
  List all pages with access keys, used to render them inline on a page
  */
  public function PagesWithAccessKeys() {
      error_log("Getting pages with access keys");
      $results= DataObject::get("Page",
      "AccessKey IS NOT NULL",//filter
      'AccessKey ASC'//sort
      );

      return $results;
    }
}
?>