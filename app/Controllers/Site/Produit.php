<?php

namespace App\Controllers\Site;

use App\Controllers\BaseController;
use App\Models\CategorieModel;
use App\Models\SousCategorieModel;
use App\Models\ProduitModel;

class Produit extends BaseController
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
	public function index($id=null)
	{
		$listeProduit = $this->produitModel->where("product_id",$id)->first();
		$relatedProd = $this->produitModel->where("category_id",$listeProduit["category_id"])->orderBy('product_id','DESC')->paginate(8);

		$listeCategorie = $this->categorieModel;

		$data = [
			'page_title' => 'Produit',
			'tableCategorie' => $listeCategorie,
			'tableProduit' => $listeProduit,
			'prodSimilaire' => $relatedProd
	   ];

		echo view('Site/common/HeaderSite',$data);
		echo view('Site/produit', $data);
		echo view('Site/common/FooterSite');
	}
	public function categorie()
	{
		
	}
}