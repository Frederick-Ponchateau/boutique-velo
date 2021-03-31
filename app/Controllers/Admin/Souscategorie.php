<?php


namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\SousCategorieModel;

/**********appel des modele utile ***************/

class Souscategorie extends BaseController
{
	public $souscategoModel = null;
	public function __construct(){
	
		parent::__construct();
		$this->souscategoModel = new SousCategorieModel();
		
	}
	public function index()
	{
		$data = [
			'page_title' => 'Sous-Categorie',
			'sousCategorie' => $this->souscategoModel->orderBy('sous_categorie_name','ASC')->findAll()
	   ];

		echo view('admin/common/HeaderAdmin');
		echo view('admin/SousCategorie',$data);
		echo view('admin/common/FooterAdmin');
	} 
	
	public function edit($id=null){
		
        /*********Je controle si je viens du formulaire ******/
        if(!empty($this->request->getVar('save'))){

			$save = $this->request->getVar('save');

			$rules = [
			'nomSousCategory'      => 'required'
			];
			
			/**************** Je controle si les informations posté son corecte ***********************
			 **************** Pour nom la longueur minimal est de 3 et la longueur maximal est de 20 caractère requit */
			if($this->validate($rules)){
				
				$data_save =
				[
					'sous_categorie_name' => 
					$this->request->getVar('nomSousCategory')
				];
				
				if($save == 'update')
				{

					$maj =  $this->souscategoModel->where('sous_categorie_id',$id)
					->set($data_save)
					->update();
					
				}
				else
				{
					$this->souscategoModel->save($data_save);
					return redirect()->to('/Admin/Souscategorie');
				}           
			}
			return redirect()->to('/Admin/Souscategorie');
        }
		$data = [
			'page_title' => 'Sous-Categorie',
			'SousCategorie' => $this->souscategoModel->orderBy('sous_category_name','ASC')->findAll()
	   ];

		echo view('admin/common/HeaderAdmin');
		echo view('admin/SousCategorie',$data);
		echo view('admin/common/FooterAdmin');
	} 
      
	public function delete($id=null){
		  /******* connexion requis *****/
		//   $session = session(); 
		//   $userID= $session->get('user_id');
		//  if($userID){        
		$this->souscategoModel->where('sous_categorie_id', $id)->delete();
			
		 
		 return redirect()->to('/Admin/Souscategorie');
 
	}
}
?>