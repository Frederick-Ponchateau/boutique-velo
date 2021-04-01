<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ProduitModel extends Model{
    protected $table = 'products';
    protected $allowedFields = ['product_id','product_name','sous_categorie_id','category_id','price','Description','Disponibility','Image','Date'];
}