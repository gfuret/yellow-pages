[
<?php  
	//header('Content-Type: text/html; charset=ISO-8859-1');
    foreach ($data as $value) {
    	echo '{ "name": "' . (isset($value->county) ? $value->county: NULL) .'" },';
        echo '{ "name": "' . (isset($value->city) ? $value->city : NULL ) .'" },';                   
    }
?>
        { "name": "" }
]







