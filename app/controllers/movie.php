<?php

class Movie extends Controller {

    public function index() {		
        $this->view('movie/index'); // Ensure this points to the correct view
    }

    public function searchMovie() {
        $name = $_REQUEST['title'];
        $_SESSION['movie'] = $this->model('Api')->searchMovie($name);
        $this->view('movie/results');
    }

    public function rateMovie() {
        $result = $_SESSION['movie'];
        
        $title = $result['Title'];
        $rating = $_REQUEST['rating'];

        $db = db_connect();
        $statement = $db->prepare('INSERT INTO ratings (title, rating) VALUES (:title, :rating)');
        $statement->bindParam(':title', $title);
        $statement->bindParam(':rating', $rating);
        $statement->execute();

        $_SESSION['movie'] = $this->model('Api')->searchMovie($title);
        $this->view('movie/results');
    }

    public function getReview() {
        $result = $_SESSION['movie'];
        $title = $result['Title'];

        $_SESSION['review'] = $this->model('Api')->getAIReview($title);
        $this->view('movie/review');
    }
}
?>