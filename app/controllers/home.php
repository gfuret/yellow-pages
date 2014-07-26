<?php

/*
*	Controller for index page
* 
*/
class Home extends Controller
{
	
	public function index()
	{
		$this->view('home/index');		
	}
}
