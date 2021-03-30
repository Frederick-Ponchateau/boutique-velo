<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ProduitModel extends Model{
    protected $table = 'products';
    protected $allowedFields = ['product_name','sous_categorie_id','categorie_id','price','Description','Image','Date'];
}