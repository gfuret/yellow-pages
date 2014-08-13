<?php
require '../app/models/company.php';
	/**
	* 
	*/
	class lang
	{

	public $fields;


    /*
    *   @param $text string is the description text in the table lang
    *   @param $lang string language selection. English by default
    *   @return false or true if it finds the argument
    *   the data is filled in the property $fields
    */
    public static function test($text = '', $lang = 'et'){
    	if (!empty($text)) {
    	$translation = data::getInstance();
            $argument = array($text);
            $translation->query('SELECT language.' . $lang . ' as lang
                            FROM language WHERE name = ?', $argument);
	    	if ($translation->count() > 0) {
                //var_dump($translation->results()); die();
                //echo htmlentities($translation->first()->lang, ENT_COMPAT, "ISO8859-1");
                echo $translation->first()->lang;
                return true;
	    	}
    	return false;    		
    	}else{
    		return false;
    	}
    }
//echo htmlentities("lääne-eesti", ENT_COMPAT, "UTF-8");
	}
