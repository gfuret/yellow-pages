<?php

/*
*
*	Results controller
*
*/
class results extends controller
{

	public function index($what = '', $where ='')
	{
		$what = ($what == 'all' ? '' : $what);
		$where = ($where == 'all' ? '' : $where);		

		// $what = str_replace(array('-','%20'), " ", htmlspecialchars(trim($what)));
		// $where = str_replace(array('-','%20'), " ", htmlspecialchars(trim($where)));
		
		//echo $what . " <-> " . htmlentities($where, ENT_COMPAT, "ISO-8859-15"); die();

		$what = str_replace(array('_','%20'), " ", trim($what));
		$where = str_replace(array('_','%20'), " ", trim($where));  
		$results = $this->model('company');
		$results->searchResults($what, $where);

		$this->view('results/index', $results->fields);		
	}
}