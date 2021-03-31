<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CategorieModel;
use App\Models\ProduitModel;

class Home extends BaseController
{
	public $categorieModel=null;
	public $produitModel =null;
	public function __construct(){
		parent::__construct();
		$this->categorieModel = new CategorieModel();
		$this->produitModel = new ProduitModel();
	}
	public function index($id=null)
	{
		$listeCategorie = $this->categorieModel->orderBy('category_name','ASC')->findAll();

		$listeProduit = $this->produitModel->orderBy('product_id','DESC')->paginate(8);
		

		$data = [
			'page_title' => 'Categorie',
			'tableCategorie' => $listeCategorie,
			'tableProduit' => $listeProduit
	   ];

		echo view('admin/common/HeaderAdmin');
		echo view('admin/Index',$data);
		echo view('admin/common/FooterAdmin');
	}
	public function categorie(){
		
	}
	public function edit(){

		echo view('admin/common/HeaderAdmin');
		echo view('admin/produit');
		echo view('admin/common/FooterAdmin');
	}
}