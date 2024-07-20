    <?php
    if (isset($_SESSION['auth']) == 1) {
        header('Location: /home');
    }
    ?>
        

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="icon" href="/favicon.png">
        <title>COSC 4806_Assignment5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        
        <style>
            .navbar-custom {
                background: linear-gradient(45deg, #6b5b95, #de4463);
                border-bottom: 4px solid #6b5b95;
            }
            .navbar-brand {
                font-size: 1.5rem;
                font-weight: bold;
                color: #fff;
            }
            .navbar-nav .nav-link {
                color: #fff;
            }
        </style>
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">COSC 4806</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
    </html>
