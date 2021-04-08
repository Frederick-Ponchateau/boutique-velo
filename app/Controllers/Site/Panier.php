<?php

namespace App\Controllers\Site;
/********************************
 * * -  Appel des elements utiles
 *********************************/
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
		/********************************
 		* * -  instance des elements utiles
 		*********************************/
		$this->categorieModel = new CategorieModel();
		$this->produitModel = new ProduitModel();
		$this->ordersItemsModel = new OrdersItemsModel();

	}
	public function index()
	{
		/********************************
 		* * - utilisation du model produit afin de le lister plustard dans le pannier
 		*********************************/
		$listeProduit = $this->produitModel;
		/********************************
 		* * - utilisation du model categorie afin de la lister plustard dans mon header
 		*********************************/
		$listeCategorie = $this->categorieModel;
		/*********************************
		 * * Recupere Id de l'utilisateur connecter
		 *********************************/
		$session = session(); 
		$userID= $session->get('user_id');
		
	   if($userID){   
		   /********************************
			* * Si l'utilisateur est connecté 
			* * j'effectue une requette qui va selectionné avec l'ID de lutilisateur
			* * et le numero de commande si il est = 0 tout les article correspondant
		    *********************************/
			$panier = $this->ordersItemsModel->where('customer_ID',$userID)->where("order_ID",0)->findAll();
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
	public function delete($id=null){
		/******* connexion requis *****/
	  //   $session = session(); 
	  //   $userID= $session->get('user_id');
	  //  if($userID){        
	  	$this->ordersItemsModel->where('order_Items_ID', $id)->delete();
	  	return redirect()->to('/Site/Panier/index');
  }
}