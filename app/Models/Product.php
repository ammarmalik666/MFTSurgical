<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [
        'product_name',
        'product_code',
        'product_description',
        'product_photo',
        'product_category',
        'tags',
        'salt',
        'status'
    ]; 
}
