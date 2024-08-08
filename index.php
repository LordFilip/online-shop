<?php 
    require_once "inc/header.php";
    require_once "app/classes/Product.php";

    $products = new Product();
    $products = $products ->fetch_all();

?>

<div class="row">
    <?php foreach ($products as $product) : ?>
        <div class="col-md-4">
            <div class="card">
                <!-- Ensure the 'image' column in your database has valid image paths -->
                <img src="images/<?= htmlspecialchars($product['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($product['name']) ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($product['name']) ?></h5>
                    <p class="card-text">Size: <?= htmlspecialchars($product['size']) ?></p>
                    <p class="card-text">Price: <?= htmlspecialchars($product['price']) ?></p>
                    <!-- Ensure 'product_id' is used consistently -->
                    <a href="product.php?product_id=<?= htmlspecialchars($product['product_id']) ?>" class="btn btn-primary">View product</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

    
        

<?php require_once 'inc/footer.php'; ?>