<?php namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
	
		$result= view('home');
		return $result;
	}

	//--------------------------------------------------------------------

}
