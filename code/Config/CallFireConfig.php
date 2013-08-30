<?php
class CallFireConfig extends DataExtension {
	private static $db = array(
		"CallFire_ApiUsername" => "Varchar",
		"CallFire_ApiPassword" => "Varchar"
	);
	
	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldsToTab("Root.CallFire", array(
			TextField::create("CallFire_ApiUsername", "API Username"),
			TextField::create("CallFire_ApiPassword", "API Password")
		));
	}
}
