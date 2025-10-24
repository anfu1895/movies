<?php

require_once __DIR__.'/../models/Movie.php';

class MovieController {
  public function popular() {
    $movieModel = new Movie();
    $data = $movieModel->getPopularMovies();

    if (isset($_GET['format']) && $_GET['format'] === 'json') {
      header('Content-Type: application/json');
      echo json_encode($data);
    } else {
      require_once __DIR__.'/../views/movies/popular.php';
    }
  }
}