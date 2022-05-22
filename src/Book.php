<?php

namespace Models;

class Book extends Product
{
    private int $weight;

    public function addProduct(array $postAttributes): void
    {
        Helper::prettyPrint($postAttributes);
        exit("sdfs");

//        try {
//            $this->database->create($validatedAttributes);
//            header("Location: /");
//            exit;
//        } catch (Error $e) {
//            echo $e;
//        }
    }
}