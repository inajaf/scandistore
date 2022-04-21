<?php

abstract class Product
{
    protected string $sku;
    protected string $name;
    protected int $price;
    private array $attributes;

    public function __construct(string $sku, string $name, int $price)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }

    public function showProduct(object $product)
    {
        echo $product;
    }

    public function getAllProducts(): array
    {

    }

}