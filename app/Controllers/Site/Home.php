<?php

namespace App\Controllers\Site;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function __construct(){
		parent::__construct();
		
	}
	public function index()
	{
	

		echo view('Site/common/HeaderSite');
		echo view('Site/home');
		echo view('Site/common/FooterSite');
	}
	public function categorie(){
		
	}
}