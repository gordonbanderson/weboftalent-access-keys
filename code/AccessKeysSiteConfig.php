<?php
  
class AccessKeysSiteConfig extends DataExtension {

    public static $db = array( 
        'SkipToMainContentAccessKey' => 'VarChar(1)'
    );

  

    public function updateCMSFields(FieldList $fields) {         
	    $tf2 = new TextField('SkipToMainContentAccessKey');
	    $tf2->setMaxLength(1);
	    $fields->addFieldToTab('Root.Accessibility', $tf2);
	    $fields->renameField("SkipToMainContentAccessKey", _t('AccessKey.SKIP_TO_MAIN_CONTENT_ACCESS_KEY'));
	}

 
}
?>