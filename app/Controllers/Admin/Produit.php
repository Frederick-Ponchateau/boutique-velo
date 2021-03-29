<?php

namespace App\Controllers;

class Produit extends BaseController
{
	public function __construct(){
		
	}
	public function index()
	{
	
		

		echo view('admin/common/HeaderAdmin');
		echo view('admin/Produit');
		echo view('admin/common/FooterAdmin');
	}
}