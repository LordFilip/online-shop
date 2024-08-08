<?php 

    require_once "inc/header.php";
    require_once "app/classes/Product.php";

    $product = new Product();
    $product = $product -> read ($_GET['product_id']);

?>

    <div class="row">
        <div class="col-lg-6">
            <img src="<?php echo $product['image']; ?>" class="img-fluid">
        </div>
        <div class="col-lg-6">
            <h2><?php echo $product['name']; ?></h2>
            <p>Size: <?php echo $product['size']; ?></p>
            <p>Price: <?php echo $product['price']; ?></p>
            <form action="" method="post">
                <button type="submit" class="btn btn-primary"> Add to cart</button>
            </form>
        </div>

    </div>


<?php require_once "inc/footer.php"; ?>