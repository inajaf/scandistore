<?php


class Book extends Product
{
    protected int $weight;

    public function __construct(string $sku, string $name, int $price, int $weight = null)
    {
        parent::__construct($sku, $name, $price);
    }

}