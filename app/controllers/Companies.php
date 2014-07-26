<?php

/**
* 	Controller 
*/
class Companies extends Controller
{
	/*
	*	$param $slug string slug of the company page
	*	
	*
	*/
	public function index($slug = '')
	{
		$lang = (isset($_COOKIE["lang"]) ? $_COOKIE["lang"] : 'en');
		$company = $this->model('Company');
		if ($company->getCompany($slug, $lang)) {
			$this->view('company/index', $company->fields[0]);
		}else{
			$this->view('pages/lost');	
		}
	}
}