<?php

/**
* 	Controller 
*/
class companies extends controller
{
	/*
	*	$param $slug string slug of the company page
	*	
	*
	*/
	public function index($slug = '')
	{
		$lang = (isset($_COOKIE["lang"]) ? $_COOKIE["lang"] : 'en');
		$company = $this->model('company');
		if ($company->getCompany($slug, $lang)) {
			$this->view('company/index', $company->fields[0]);
		}else{
			$this->view('pages/lost');	
		}
	}
}