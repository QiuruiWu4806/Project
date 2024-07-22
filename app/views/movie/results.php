<?php require_once 'app/views/templates/headerPublic.php'; 

$result = $_SESSION['movie'];
?>

<!DOCTYPE html>
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

                    <!-- Rating -->
                    <form method="post" action="rateMovie">
                        <div class="form-group">
                            <label for="rating">Rate this movie:</label>
                            <div class="btn-group" role="group" aria-label="Rating">
                                <button type="submit" class="btn btn-outline-primary" name="rating" value="1">1 ★</button>
                                <button type="submit" class="btn btn-outline-primary" name="rating" value="2">2 ★</button>
                                <button type="submit" class="btn btn-outline-primary" name="rating" value="3">3 ★</button>
                                <button type="submit" class="btn btn-outline-primary" name="rating" value="4">4 ★</button>
                                <button type="submit" class="btn btn-outline-primary" name="rating" value="5">5 ★</button>
                            </div>
                        </div>
                    </form>
                    <!-- Display existing rating -->
                    <?php 
                    $db = db_connect();
                    $stmt = $db->prepare("SELECT rating FROM ratings WHERE title = :title");
                    $stmt->bindParam(':title', $result['Title']);
                    $stmt->execute();
                    $ratings = $stmt->fetchAll(PDO::FETCH_ASSOC); 
                    ?>

                    <!-- Get AI Review Button -->
            <form method="post" action="getReview">
        <input type="hidden" name="title" value=$result['Title']);>
        <button type="submit" class="btn btn-info mt-3">Get a Review</button>
    </form>

                    <!-- Display existing ratings -->
                    <?php if (!empty($ratings)): ?>
                        <p><strong>Ratings:</strong></p>
                        <ul>
                            <?php foreach ($ratings as $rating): ?>
                                <li><?php echo htmlspecialchars($rating['rating']); ?> ★</li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p>No ratings yet for this movie.</p>
                    <?php endif; ?>

                </div>
            </div>
        <?php else: ?>
            <p>No movie found with that title.</p>
        <?php endif; ?>

    </div>
    </body>
</html>

<?php require_once 'app/views/templates/footer.php'; ?>
