<?php require_once 'app/views/templates/headerPublic.php'; 

$result = $_SESSION['movie'];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie Review</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container mt-4">
        <h1>Review for "<?php echo $result['Title']; ?>"</h1>
        <p><?php echo nl2br(htmlspecialchars($_SESSION['review'])); ?></p>
    </div>
    </body>
</html>

<?php require_once 'app/views/templates/footer.php'; ?>