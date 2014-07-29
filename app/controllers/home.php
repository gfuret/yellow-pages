<?php

/*
*	Controller for index page
* 
*/
class home extends controller
{
	
	public function index($slug = false)
	{

	    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	        $what = (!empty($_POST['what']) ? $_POST['what'] : 'all');
	        $where = (!empty($_POST['where']) ? $_POST['where'] : 'all'); 

	        $search_issues = array(' ','%20','Ä','ä','Õ','õ','Ö','ö','Ü','ü','Š','š','Ž','ž'/**/);
	        $search_fix = array('_','_','?','?','?','?','?','?','?','?','?','?','?','?'/**/);

	        // $name = str_replace(array(' ','%20'), "_", $what);
	        // $location = str_replace(array(' ','%20'), "_", $where);  
	        $name = str_replace($search_issues, $search_fix, trim($what));
	        $location = str_replace($search_issues, $search_fix, trim($where));

	        header('Location: /directory/public/results/' . $name . '/' . $location);
	    }

		if (!$slug) {
			$this->view('home/index');
		}else{
			$this->view('pages/lost');	
		}			
	}
}
