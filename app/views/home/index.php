    <?php require_once 'app/views/templates/header.php'; ?>

    <div class="container">
        <div class="page-header" id="banner">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Hello</h1>
                    <p>Welcome, <?=$_SESSION['username'] ?></p>
                    <p class="lead"><?= date("F jS, Y"); ?></p>
                </div>
            </div>
        </div>


        <!-- Alert -->
        <div class="alert alert-primary" role="alert">
          You have successfully logged in!
        </div>

    <?php require_once 'app/views/templates/footer.php'; ?>
