<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $fillable = ['product_name',
     'category_id',
     'product_image',
     'product_price',
    
    
    ];
}
