<?php

class Reminder {
  
    public function __construct() {

    }

  public function get_all_reminders () {
    $db = db_connect();
    $statement = $db->prepare("select * from reminders;");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

}