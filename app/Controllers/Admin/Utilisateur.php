<?php


namespace App\Controllers\Admin;

use App\Controllers\BaseController;

/**********appel des modele utile ***************/

class Utilisateur extends BaseController
{
	public function __construct(){
		parent::__construct();
		
	}
	public function index()
	{
	
		

		echo view('admin/common/HeaderAdmin');
		echo view('admin/Utilisateur');
		echo view('admin/common/FooterAdmin');
	} 
	public function edit(){

	}
	public function delete(){
		
	}
}
?>