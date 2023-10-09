<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;

    
    public int $productId; 
    private string $productName;
    private string $productDescription;
    private int $price;
    private bool $status;
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

    public function getStatus(): bool
    {
        return $this->status;
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
    public function setStatus(bool $newStatus): void
    {
        $this->Status = $newStatus;
    }
    public function setQuantity(int $newQuantity): void
    {
        $this->quantity = $newQuantity;
    }

}