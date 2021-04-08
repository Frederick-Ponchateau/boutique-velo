<?php

namespace App\Controllers\Site;

use App\Controllers\BaseController;
use App\Models\OrdersModel;
use App\Models\OrdersItemsModel;
use App\Models\CategorieModel;
use App\Models\ProduitModel;
use App\Models\UserModel;

class Validation extends BaseController
{
	public $produitModel =null;
	public $categorieModel=null;
	public $ordersModel=null;
	public $ordersItemsModel=null;
	public $userModel=null;
	public function __construct(){
		parent::__construct();
		$this->categorieModel = new CategorieModel();
		$this->produitModel = new ProduitModel();
		$this->ordersModel = new OrdersModel();
		$this->userModel = new UserModel();
		$this->ordersItemsModel = new OrdersItemsModel();
	}
	public function index()
	{
		$session = session(); 
		$userID = $session->get('user_id');
		
		
		$listeCategorie = $this->categorieModel;
		$listeOrders = $this->ordersModel->where("customer_ID",$userID)->orderBy('order_ID', 'DESC')->first();
		$listeUser = $this->userModel->where("user_id",$listeOrders["customer_ID"])->first();
		$listeOrdersItems = $this->ordersItemsModel->where("customer_ID",$listeUser["user_id"])->where("order_ID",$listeOrders["order_ID"])->findAll();
		$listeProduit = $this->produitModel;
		var_dump($listeOrdersItems);

		$data = [
			'page_title' 		=> 'Validation',
			'tableCategorie'	=> $listeCategorie,
			'tableProduit' 		=> $listeProduit,
			'user'         		=> $listeUser, 
			"panier"       		=> $listeOrders
			
	   ];

		echo view('Site/common/HeaderSite',$data);
		echo view('Site/validation',$data);
		echo view('Site/common/FooterSite');
	}
	public function valider(){

		$session = session(); 
		$userID = $session->get('user_id');
		//$panierUser = $this->ordersItemsModel;
		 
	   if($userID){   
		   $data_save = [
			"customer_ID"=>$userID,
			"total" => $session->get("total")
		   ];
			$panierUser =  $this->ordersModel->save($data_save);
		    $order =  $this->ordersModel->where("customer_ID",$userID)->orderBy('order_ID', 'DESC')->first();
			//var_dump($session->get("total"));
		
		 var_dump($data_save);
		 $maj =  $this->ordersItemsModel
		 ->where("customer_ID",$userID)
		 ->where("order_ID",0)
		 ->set(["order_ID" => $order["order_ID"]])
		 ->update();
		}
		return redirect()->to('/Site/Validation/index');
	}
}