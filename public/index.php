<?php

require_once "../src/helpers/autoload.php";

include "template/layouts/main.php";

$product = new Product();
$products = $product->getProducts();


include('template/layouts/partials/_head.php');
?>

<div class="container">
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-sm-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input .delete-checkbox" type="checkbox">
                        </div>
                        <p class="card-text text-center m-0"><?= $product['sku'] ?></p>
                        <p class="card-text text-center m-0"><?= $product['name'] ?></p>
                        <p class="card-text text-center m-0">$<?= $product['price'] ?></p>
                        <?php if ($product['size']): ?>
                            <p class="card-text text-center m-0">Size: <?= $product['size'] ?> MB</p>
                        <?php endif; ?>
                        <?php if ($product['height'] && $product['width'] && $product['length']): ?>
                            <p class="card-text text-center m-0">
                                Dimension: <?=
                                $product['height'] . 'x'
                                . $product['width'] . 'x'
                                . $product['length'] ?>
                            </p>
                        <?php endif; ?>
                        <?php if ($product['weight']): ?>
                            <p class="card-text text-center m-0">Weight: <?= $product['weight'] ?> KG</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include('template/layouts/partials/_footer.php'); ?>

