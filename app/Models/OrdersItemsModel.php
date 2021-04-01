<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class OrdersItemsModel extends Model{
    protected $table = 'orders_items';
    protected $allowedFields = ['order_Items_ID','customer_ID','order_ID','product_ID','date'];
}