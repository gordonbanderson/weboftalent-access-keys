<?php
  
class AccessKeysSiteConfig extends DataObjectDecorator {
     
    function extraStatics() {
        return array(
            'db' => array(
                'SkipToMainContentAccessKey' => 'VarChar(1)'
            )
        );
    }
  
    public function updateCMSFields(FieldSet &$fields) {         
	    $tf2 = new TextField('SkipToMainContentAccessKey');
	    $tf2->setMaxLength(1);
	    $fields->addFieldToTab('Root.Accessibility', $tf2);
	    $fields->renameField("SkipToMainContentAccessKey", _t('AccessKey.SKIP_TO_MAIN_CONTENT_ACCESS_KEY'));
	}

 
}
?>