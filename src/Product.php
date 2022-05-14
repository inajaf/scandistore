<?php


abstract class Product
{
    protected string $sku;
    protected string $name;
    protected int $price;

    public function __construct(string $sku, string $name, int $price)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }

    public function showProduct(object $product): void
    {
        echo $product;
    }

    public function addProduct()
    {
        echo "Add product functionality";
    }

    public function getAllProducts(): array
    {

    }

}