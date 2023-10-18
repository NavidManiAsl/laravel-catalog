<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
    public int $productId; 
    private string $productName;
    private string $productDescription;
    private int $price;
    private int $quantity;



}