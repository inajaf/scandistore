<?php


use src\Helper;

abstract class MainProduct
{
    protected array $products;
//    protected string $sku;
//    protected string $name;
//    protected float $price;
    protected array $attributes;

    public function showProduct(object $product): void
    {
        echo $product;
    }

    public function addProduct(array $postAttributes): void {}


    public function getAllProducts(): array
    {
        return $this->products;
    }

}