<?php
  
class AccessKeysSiteConfig extends DataObjectDecorator {
     
    function extraStatics() {
        return array(
            'db' => array(
                'SearchAccessKey' => 'VarChar(1)',
                'SkipToMainContentAccessKey' => 'VarChar(1)',
                'AccessibilityHelpAccessKey' => 'VarChar(1)'
            )
        );
    }
  
    public function updateCMSFields(FieldSet &$fields) {         

        $tf1 = new TextField('SearchAccessKey');
	    $tf1->setMaxLength(1);
	    $fields->addFieldToTab('Root.Accessibility', $tf1);
	    $fields->renameField("SearchAccessKey", _t('AccessKey.SEARCH_ACCESS_KEY'));

	    $tf2 = new TextField('SkipToMainContentAccessKey');
	    $tf2->setMaxLength(1);
	    $fields->addFieldToTab('Root.Accessibility', $tf2);
	    $fields->renameField("SkipToMainContentAccessKey", _t('AccessKey.SKIP_TO_MAIN_CONTENT_ACCESS_KEY'));

	    $tf3 = new TextField('AccessibilityHelpAccessKey');
	    $tf3->setMaxLength(1);
	    $fields->addFieldToTab('Root.Accessibility', $tf3);
	    $fields->renameField("AccessibilityHelpAccessKey", _t('AccessKey.ACCESSIBILITY_HELP_ACCESS_KEY'));
	}

 
}
?>