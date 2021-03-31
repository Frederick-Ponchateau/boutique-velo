<?php


namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

/**********appel des modele utile ***************/

class Utilisateur extends BaseController
{
	public function __construct(){
		parent::__construct();
		$this->userModel = new UserModel();
		
	}
	public function index()
	{
	
		$data = [
			'page_title' => 'Utilisateur',
			'tableUser' => $this->userModel->orderBy('user_created_at','DESC')->findAll()
	   ];

		

		echo view('admin/common/HeaderAdmin');
		echo view('admin/Utilisateur',$data);
		echo view('admin/common/FooterAdmin');
	} 
	public function edit(){

	}
	public function delete(){
		
	}
}
?>