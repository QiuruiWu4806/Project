<?php require_once 'app/views/templates/headerPublic.php'; ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie Search</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                background-color: #f8f9fa;
            }
        </style>
    </head>
    <body>
    <div class="container mt-4">
        <h1>Search for a Movie</h1>
        <form method="post" action="movie/searchMovie" class="mb-4">
            <div class="form-group">
                <label for="title">Movie Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter movie title" required>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    </body>
</html>

<?php require_once 'app/views/templates/footer.php'; ?>