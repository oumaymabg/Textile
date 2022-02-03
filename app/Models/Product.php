<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id_Product';
    protected $fillable = ['id_customer', 'Quantity', 'product_name', 'price','type'];
}
