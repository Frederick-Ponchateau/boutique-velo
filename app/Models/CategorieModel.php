<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class CategorieModel extends Model{
    protected $table = 'products';
    protected $allowedFields = ['category_id','category_name','Date'];
}