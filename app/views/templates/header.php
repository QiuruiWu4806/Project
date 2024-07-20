<?php
if (!isset($_SESSION['auth'])) {
    header('Location: /login');
}
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="icon" href="/favicon.png">
      <title>COSC 4806_Assignment5</title>
      
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="mobile-web-app-capable" content="yes">
      <style>
          .navbar-custom {
              background: linear-gradient(45deg, #6b5b95, #de4463);
              border-bottom: 4px solid #ffcc5c;
          }
          .navbar-brand {
              font-size: 1.5rem;
              font-weight: bold;
              color: #fff;
          }
          .navbar-nav .nav-link {
              color: #fff;
          }
          .navbar-nav .nav-link:hover {
              color: #ffcc5c;
          }
          .btn-custom {
              color: #fff;
              border-color: #ffcc5c;
              background-color: #de4463;
          }
          .btn-custom:hover {
              color: #fff;
              background-color: #ff6f61;
              border-color: #ffcc5c;
          }
      </style>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">Qiurui Wu</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="/home">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/reminders">Reminders</a>
                      </li>
                      
                      <li class="nav-item">
                            <a class="nav-link" href="/reports">Reports</a>
                        </li>
                  </ul>
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                          <a class="nav-link btn btn-custom" href="/logout">Logout</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>

    
  </body>
  </html>


