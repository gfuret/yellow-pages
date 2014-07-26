<?php

/*
*
*	Results controller
*
*/
class Results extends Controller
{
	
	public function index($what = '', $where ='')
	{
		//
		$what = ($what == 'all' ? '' : $what);
		$where = ($where == 'all' ? '' : $where);		
		//


		// $what = str_replace(array('-','%20'), " ", htmlspecialchars(trim($what)));
		// $where = str_replace(array('-','%20'), " ", htmlspecialchars(trim($where)));


		$what = str_replace(array('_','%20'), " ", htmlspecialchars(trim($what)));
		$where = str_replace(array('_','%20'), " ", htmlspecialchars(trim($where)));
		$results = $this->model('company');
		$results->searchResults($what, $where);

		$this->view('results/index', $results->fields);		
	}
}




