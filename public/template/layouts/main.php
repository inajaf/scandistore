<?php include('partials/_head.php'); ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
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
                    <a href="/addProduct.php">
                        <button class="btn btn-success me-md-2" type="button">ADD</button>
                    </a>
                    <button class="btn btn-warning" type="button" id="delete-product-btn">MASS DELETE</button>
                </div>
            </div>
        </div>
    </nav>
<?php include('partials/_footer.php'); ?>