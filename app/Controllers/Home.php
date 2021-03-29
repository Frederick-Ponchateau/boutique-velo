<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct(){
		parent::__construct();
		$this->client = \Config\Services::curlrequest();
	}
	public function index()
	{
	
		
		// $data = 
		// [
		// 	"contacts" => $Contacts
		// ]; 

		echo view('common/HeaderSite');
		echo view('index', $data);
		echo view('common/FooterSite');
	}
}