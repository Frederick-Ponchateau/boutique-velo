<?php


namespace App\Controllers\Admin;

use App\Controllers\BaseController;

/**********appel des modele utile ***************/

class Commande extends BaseController
{
	public function __construct(){
		parent::__construct();
		
	}
	public function index()
	{
	
		

		echo view('admin/common/HeaderAdmin');
		echo view('admin/Commande');
		echo view('admin/common/FooterAdmin');
	} 
    public function detail()
    {
        echo view('admin/common/HeaderAdmin');
		echo view('admin/DetailCommande');
		echo view('admin/common/FooterAdmin');
    }
	public function edit(){

	}
	public function delete(){
		
	}
}
?>