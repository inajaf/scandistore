<?php

require_once "../src/helpers/autoload.php";

$product = new Product();

if (!empty($_POST)) {
    $product->addProduct($_POST);
}

include('template/layouts/partials/_head.php');

?>
    <form method="POST" id="product_form">
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
                    <button class="btn btn-warning" onclick="window.location='/'">Cancel</button>
                </div>
            </div>
        </nav>
        <hr class="mb-2"/>
        <div class="row p-4">
            <div class="alert alert-danger" role="alert" id="message" style="display: none;"></div>
            <div class="form-group row mb-3">
                <label for="sku" class="col-2 col-form-label required">SKU</label>
                <div class="col-3">
                    <input type="text" name="sku" class="form-control" id="sku" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="name" class="col-2 col-form-label required">Name</label>
                <div class="col-3">
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="price" class="col-2 col-form-label required">Price ($)</label>
                <div class="col-3">
                    <input type="text" name="price" class="form-control" id="price" required>
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
            <div class="form-group row mb-3" id="parameters"></div>
        </div>
    </form>

<?php include('template/layouts/partials/_footer.php'); ?>