<?php

namespace App\Models;

class Product
{
    private $id;
    private $name;
    private $price;
    private $description;
    private $stock;
    
    public function __construct($id, $name, $price, $description, $stock)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->stock = $stock;
    }
    
    // Getter methods
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getPrice()
    {
        return $this->price;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function getStock()
    {
        return $this->stock;
    }
}
