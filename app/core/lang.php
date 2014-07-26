<?php
require '../app/models/Company.php';
	/**
	* 
	*/
	class Lang
	{

	public $fields;


    /*
    *   @param $text string is the description text in the table lang
    *   @param $lang string language selection. English by default
    *   @return false or true if it finds the argument
    *   the data is filled in the property $fields
    */
    public static function test($text = '', $lang = 'en'){
    	if (!empty($text)) {
    	$translation = data::getInstance();
            $argument = array($text);
            $translation->query('SELECT language.' . $lang . ' as lang
                            FROM language WHERE name = ?', $argument);
	    	if ($translation->count() > 0) {
	    		echo $translation->first()->lang;
                return true;
	    	}
    	return false;    		
    	}else{
    		return false;
    	}
    }


	}
