<?php


namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\CategorieModel;

/**********appel des modele utile ***************/

class Categorie extends BaseController
{
	public $categorieModel = null;
	public function __construct(){
	
			parent::__construct();
			$this->categorieModel = new CategorieModel();
		
	}
	public function index()
	{
		helper(['form']);
	


		$data = [
			'page_title' => 'Categorie',
			'tableCategorie' => $this->categorieModel->orderBy('category_name','ASC')->findAll()
	   ];

		echo view('admin/common/HeaderAdmin',$data);
		echo view('admin/categorie',$data);
		echo view('admin/common/FooterAdmin');
	} 
	
	public function edit($id=null){
		
        /*********Je controle si je viens du formulaire ******/
        if(!empty($this->request->getVar('save'))){

			$save = $this->request->getVar('save');

			$rules = [
			'nomCategory'      => 'required'
			];
			
			/**************** Je controle si les informations posté son corecte ***********************
			 **************** Pour nom la longueur minimal est de 3 et la longueur maximal est de 20 caractère requit */
			if($this->validate($rules)){
				
				$data_save =
				[
					'category_name' => 
					$this->request->getVar('nomCategory')
				];
				
				if($save == 'update')
				{

					$maj =  $this->categorieModel->where('category_id',$id)
					->set($data_save)
					->update();
					
				}
				else
				{
					$this->categorieModel->save($data_save);
					return redirect()->to('/Admin/Categorie');
				}           
			}
			return redirect()->to('/Admin/Categorie');
        }
		$data = [
			'page_title' => 'Categorie',
			'tableCategorie' => $this->categorieModel->orderBy('category_name','ASC')->findAll()
	   ];

		echo view('admin/common/HeaderAdmin');
		echo view('admin/categorie',$data);
		echo view('admin/common/FooterAdmin');
	} 
      
	public function delete($id=null){
		  /******* connexion requis *****/
		//   $session = session(); 
		//   $userID= $session->get('user_id');
		//  if($userID){        
		$this->categorieModel->where('category_id', $id)->delete();
			
		 
		 return redirect()->to('/Admin/categorie');
 
	}
}
?>