<?php

require_once "../src/helpers/autoload.php";

use src\Product;
use src\Helper;

include('template/layouts/partials/_head.php');

?>
    <form method="post" id="product_form">
        <nav class="navbar navbar-expand-lg navbar-light bg-light pb-3 mb-4 p-2">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Products list</a>
                    </li>
                </ul>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input class="btn btn-success me-md-2" type="submit" value="Save" name="save"/>
                    <input class="btn btn-warning" type="submit" value="Cancel" name="cancel"/>
                </div>
            </div>
        </nav>
        <hr class="mb-2" />
        <div class="row p-4">
            <div class="form-group row mb-3">
                <label for="sku" class="col-2 col-form-label">SKU</label>
                <div class="col-3">
                    <input type="text" name="sku" class="form-control" id="sku">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="name" class="col-2 col-form-label">Name</label>
                <div class="col-3">
                    <input type="text" name="price" class="form-control" id="price">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="price" class="col-2 col-form-label">Price ($)</label>
                <div class="col-3">
                    <input type="text" name="price" class="form-control" id="price">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="typeSwitcher" class="col-2 col-form-label">Type Switcher</label>
                <div class="col-3">
                    <select class="form-select" id="productType">
                        <option value="dvd" id="dvd">DVD-disc</option>
                        <option value="book" id="book">Book</option>
                        <option value="furniture" id="furniture">Furniture</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-3" id="dvdParams">
                <label for="size" class="col-2 col-form-label">Size (MB)</label>
                <div class="col-2">
                    <input type="text" name="size" class="form-control" id="size">
                </div>
            </div>
            <div class="form-group row mb-3" id="bookParams">
                <label for="weight" class="col-2 col-form-label">Weight (KG)</label>
                <div class="col-2">
                    <input type="text" name="weight" class="form-control" id="weight">
                </div>
            </div>
            <div class="form-group row mb-3" id="furnitureParams">
                <div class="row mb-3">
                    <label for="height" class="col-2 col-form-label">Height (CM)</label>
                    <div class="col-2">
                        <input type="text" name="height" class="form-control" id="height">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="width" class="col-2 col-form-label">Width (CM)</label>
                    <div class="col-2">
                        <input type="text" name="width" class="form-control" id="width">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="length" class="col-2 col-form-label">Length (CM)</label>
                    <div class="col-2">
                        <input type="text" name="length" class="form-control" id="length">
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php include('template/layouts/partials/_footer.php'); ?>