<?php require_once "inc/header.php" ?>

    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h3 class="text-center py-5">Login</h3>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="username" name="username" class="form-control" id="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Username</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>

            <a href="register.php">Register</a>
        </div>
    </div>

<?php require_once "inc/footer.php" ?>