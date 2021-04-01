<?php

namespace App\Controllers\Admin;

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

		echo view('admin/common/HeaderAdmin');
		echo view('admin/Index',$data);
		echo view('admin/common/FooterAdmin');
	}
	public function categorie($id=null){
		$listeProduit = $this->produitModel->where("category_id",$id)->orderBy('product_id','DESC')->paginate(8);
		$listeCategorie = $this->categorieModel;

		$data = [
			'page_title' => 'Categorie',
			'tableCategorie' => $listeCategorie,
			'tableProduit' => $listeProduit
	   ];

		echo view('admin/common/HeaderAdmin');
		echo view('admin/Index',$data);
		echo view('admin/common/FooterAdmin');
	}
	public function edit($id=null){

		$listeProduit = $this->produitModel->where("product_id",$id)->first();

		if(!empty($this->request->getVar('save'))){

            $save = $this->request->getVar('save');
           
            $rules = [
                'productName'          	=> 'required',           
                'productDescription'    	=> 'required',
                'categorie'  	=> 'required',
                'sousCategorie'  	=> 'required',
                'salePrice'     		=> 'required'
            ];
               //dd($this->request->getVar('image'));
            if($this->validate($rules)){
               
                $dataSave = [
                    'product_name'    			=> $this->request->getVar('productName'),
                    'sous_categorie_id'  		=> $this->request->getVar('sousCategorie'),
                    'category_id'    			=> $this->request->getVar('categorie'),
                    'Description'    			=> $this->request->getVar('productDescription'),
                    'Disponibility'    			=> $this->request->getVar('Disponibility'),
                    'price' 					=> $this->request->getVar('salePrice')
                ];
                
                if($save == 'update'){
                    
                    $test=  $this->produitModel
					->where("product_id",$id)
                  
                    ->set($dataSave)
                    ->update();

                }else{
                    
                    $this->produitModel->save($dataSave);
                   // dd($dataSave);
                    
                }
            }  
            return redirect()->to('/Admin/Home/index');
        }

  
		$data = [
			'page_title' => 'Modifier Produit',
			'sousCategorie' => $this->souscategoModel->orderBy('sous_categorie_name','ASC')->findAll(),
			'tableCategorie' => $this->categorieModel->orderBy('category_name','ASC')->findAll(),
			'tableProduit' => $listeProduit
		];


		echo view('admin/common/HeaderAdmin');
		echo view('admin/produit', $data);
		echo view('admin/common/FooterAdmin');
	}
}