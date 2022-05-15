<?php


class Product extends MainProduct
{
    protected Database $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    private array $validAttributes = [
        'sku', 'name', 'price', 'size', 'weight', 'height', 'width', 'length'
    ];


    public function addProduct(array $postAttributes): void
    {
        $validatedAttributes = $this->validateArray($postAttributes);
        $this->database->create($validatedAttributes);

    }

    private function validateArray(array $postAttributes): array
    {
        $data = [];

        foreach ($postAttributes as $key => $value) {
            if (in_array($key, $this->validAttributes, true)) {
                $data [] = [
                    $key => $value ?: null
                ];
            }
        }

        return array_merge(...$data);
    }
}