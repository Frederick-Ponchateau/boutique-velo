<?php

namespace App\Controllers\Site;
/********************************
 * * -  Appel des elements utiles
 *********************************/
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
		/********************************
 		* * -  instance des elements utiles
 		*********************************/
		$this->categorieModel = new CategorieModel();
		$this->souscategoModel = new SousCategorieModel();
		$this->produitModel = new ProduitModel();

	}
	public function index($id=null)
	{
		/********************************
 		* * - Requete pour lister un produit par son id 
 		*********************************/
		$listeProduit = $this->produitModel->where("product_id",$id)->first();
		/********************************
 		* * - Requete pour lister un produit avec ID de la categorie du produit selectione avant
 		*********************************/
		$relatedProd = $this->produitModel->where("category_id",$listeProduit["category_id"])->orderBy('product_id','DESC')->paginate(8);
		/********************************
 		* * - utilisation du model afin de le lister plustard dans mon header
 		*********************************/
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

}