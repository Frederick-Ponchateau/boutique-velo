<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Controllers\BaseController;

class Home extends BaseController
{
	public function __construct(){
		parent::__construct();
		$this->client = \Config\Services::curlrequest();
	}
	public function index()
	{
	

		echo view('admin/common/HeaderAdmin');
		echo view('admin/Index');
		echo view('admin/common/FooterAdmin');
	}
	public function categorie(){
		
	}
}