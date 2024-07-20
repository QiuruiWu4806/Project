<?php

class Reports extends Controller {

    // Directs to the index page
    public function index() {
        if($_SESSION['username'] == 'admin') {
            $this->view('reports/index');
        } else {
          echo '
          <!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Unauthorized</title>
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          </head>
          <body>
              <div class="container mt-5">
                  <div class="alert alert-danger" role="alert">
                      Access Denied: You are not authorized to view this page.
                  </div>
              </div>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-SuLjP1vHVJvQP6jGwVjRc4O4C0l9Pe8Q+eA0D0nAxyO5A4i+mGifgPuL1Il3ftAN" crossorigin="anonymous"></script>
          </body>
          </html>
          
          ';
        }
    }

    public function get_all_reminders () {
      $db = db_connect();
      $statement = $db->prepare("select * from reminders;");
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
    }
    
    function mostReminders() {
        $db = db_connect();
        $query = "SELECT user_id, COUNT(*) AS reminder_count FROM reminders GROUP BY user_id ORDER BY reminder_count DESC LIMIT 1";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function countTotalLogins() {
        $db = db_connect();
        $query = "SELECT username, COUNT(goodAttempt) AS login_count FROM log GROUP BY username";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}
?>
