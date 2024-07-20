    <?php require_once 'app/views/templates/header.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="alert alert-primary" role="alert">
                    You have logged in as ADMIN!
                </div>
            </div>
        </div>
        
 
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Reminders</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <?php
                            $db = db_connect();
                            $query = "SELECT * FROM reminders";
                            $statement = $db->prepare($query);
                            $statement->execute();
                            $reminders = $statement->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($reminders as $reminder) {
                                echo '<li class="list-group-item">User id: ' . $reminder['user_id'] . '</li>';
                                echo '<li class="list-group-item">Subject: ' . $reminder['subject'] . '</li>';
                                echo '<li class="list-group-item">Created At: ' . $reminder['created_at'] . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users with Most Reminders</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <?php
                            $query = "SELECT user_id, COUNT(*) AS reminder_count FROM reminders GROUP BY user_id ORDER BY reminder_count DESC LIMIT 1";
                            $statement = $db->prepare($query);
                            $statement->execute();
                            $mostReminders = $statement->fetch(PDO::FETCH_ASSOC);
                            echo '<li class="list-group-item">User id: ' . $mostReminders['user_id'] . '</li>';
                            echo '<li class="list-group-item">Reminder Count: ' . $mostReminders['reminder_count'] . '</li>';
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Total Logins</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <?php
                            $query = "SELECT username, COUNT(goodAttempt) AS login_count FROM log GROUP BY username";
                            $statement = $db->prepare($query);
                            $statement->execute();
                            $totalLogins = $statement->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($totalLogins as $login) {
                                echo '<li class="list-group-item">' . $login['username'] . ': ' . $login['login_count'] . ' logins</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php'; ?>
