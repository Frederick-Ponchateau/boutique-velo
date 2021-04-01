<?php

namespace App\Controllers\Site;

use App\Controllers\BaseController;
use App\Models\CategorieModel;
use App\Models\ProduitModel;
use App\Models\OrdersItemsModel;
class Panier extends BaseController
{
	public $produitModel =null;
	public $categorieModel=null;
	public $ordersItemsModel=null;
	public function __construct(){
		parent::__construct();
		
		$this->categorieModel = new CategorieModel();
		$this->produitModel = new ProduitModel();
		$this->ordersItemsModel = new OrdersItemsModel();

	}
	public function index()
	{

		$listeProduit = $this->produitModel;
		
		$listeCategorie = $this->categorieModel;

		$session = session(); 
		$userID= $session->get('user_id');
	   if($userID){   
			$panier = $this->ordersItemsModel->where('customer_ID',$userID)->findAll();
	   }
		$data = [
			'page_title' => 'Produit',
			'tableCategorie' => $listeCategorie,
			'tableProduit' => $listeProduit,
			'ordersItems' => $panier
			
	   ];
		
	
		echo view('Site/common/HeaderSite',$data);
		echo view('Site/panier',$data);
		echo view('Site/common/FooterSite');
	}
	public function save($id=null)
	{
		$session = session(); 
		$userID= $session->get('user_id');
	   if($userID){   
		   $dataSave = [
			"product_ID" 		=> $id,
			"customer_ID"	=> 	$userID
		   ];
		   $this->ordersItemsModel->save($dataSave);
		}
		return redirect()->to('/Site/Panier/index');
	}
}