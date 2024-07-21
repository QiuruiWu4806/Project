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


}
?>
