<?php namespace App\Controllers;

use App\Models\UserModel;

class SaveSouscription extends BaseController
{
	public function index()
	{

		$array = array_keys($_POST);

		$tmp01 = json_decode($array[0],true) ;

		error_log($tmp01['endpoint']) ;


	}

	//--------------------------------------------------------------------

}
?>

