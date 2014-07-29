<?php


/**
* Controller for pages 
* for example: About, Portfolio
*/
class pages extends controller
{
	
	public function index(){
		$this->view('home/index');	
	}

	//controller function to feed with json a list of cities and counties of companies
	public function location() //not yet
	{
		$company = $this->model('company');
		$company->allLocation();
		$this->view('pages/location', $company->fields/*JSON array with all the locations*/);
	}


	//controller function to feed with json a list of companies and their categories
	public function companies() //not yet
	{
		$company = $this->model('company');
		$company->allCompanies();
		$this->view('pages/companies', $company->fields/*, JSON array with all the companies*/);
	}	
}