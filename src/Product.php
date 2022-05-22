<?php


abstract class MainProduct
{
    protected string $sku;
    protected string $name;
    protected string $type;
    protected array $attributes;
    protected array $products;

    public function addProduct(array $postAttributes) {}


    public function getProducts(): array
    {
        return $this->products;
    }

}