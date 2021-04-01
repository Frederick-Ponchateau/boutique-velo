<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class OrdersModel extends Model{
    protected $table = 'orders';
    protected $allowedFields = ['order_ID','customer_ID','date'];
}