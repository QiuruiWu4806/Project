<?php require_once 'app/views/templates/headerPublic.php'; 

$result = $_SESSION['movie'];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie Search Results</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container mt-4">
        <h1>Search Results</h1>

        <?php if (!empty($result)): ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $result['Title']; ?></h5>
                    <p class="card-text"><strong>Year:</strong> <?php echo $result['Year']; ?></p>
                    <p class="card-text"><strong>Rated:</strong> <?php echo $result['Rated']; ?></p>
                    <p class="card-text"><strong>Genre:</strong> <?php echo $result['Genre']; ?></p>
                    <p class="card-text"><strong>Plot:</strong> <?php echo $result['Plot']; ?></p>
                    <p class="card-text"><strong>Poster:</strong> <img src="<?php echo $result['Poster']; ?>" alt="Movie Poster" class="img-fluid"></p>
                </div>
            </div>
        <?php else: ?>
            <p>No movie found with that title.</p>
        <?php endif; ?>

    </div>
    </body>
</html>

<?php require_once 'app/views/templates/footer.php'; ?>