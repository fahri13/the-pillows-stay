<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
		$data = ['title' => 'Home'];
		return view('home/index', $data);
	}

	//--------------------------------------------------------------------

}
