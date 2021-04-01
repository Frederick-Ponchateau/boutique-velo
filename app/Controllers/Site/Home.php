<?php

namespace App\Controllers\Site;

use App\Controllers\BaseController;
use App\Models\CategorieModel;
use App\Models\SousCategorieModel;
use App\Models\ProduitModel;

class Home extends BaseController
{	
	public $souscategoModel = null;
	public $categorieModel=null;
	public $produitModel =null;

	public function __construct(){
		parent::__construct();
		$this->categorieModel = new CategorieModel();
		$this->souscategoModel = new SousCategorieModel();
		$this->produitModel = new ProduitModel();

	}
	
	public function index()
	{
		$listeCategorie = $this->categorieModel;

		$listeProduit = $this->produitModel->orderBy('product_id','DESC')->paginate(8);
		

		$data = [
			'page_title' => 'Categorie',
			'tableCategorie' => $listeCategorie,
			'tableProduit' => $listeProduit
	   ];
		echo view('Site/common/HeaderSite');
		echo view('Site/home',$data);
		echo view('Site/common/FooterSite');
	}
	public function categorie(){
		
	}
}