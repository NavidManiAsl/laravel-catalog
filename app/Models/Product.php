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

    public function getName(): string
    {
        return $this->productName;
    }

    public function getId(): string
    {
        return $this->productDescription;
    }

    public function getPrice(): int
    {
        return $this->price;
    }


    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setName(string $newName): void
    {
        $this->productName = $newName;
    }
    public function setId(string $newDescription): void
    {
        $this->productDescription = $newDescription;
    }
    public function setPrice(int $newPrice): void
    {
        $this->price = $newPrice;
    }
    public function setQuantity(int $newQuantity): void
    {
        $this->quantity = $newQuantity;
    }

}