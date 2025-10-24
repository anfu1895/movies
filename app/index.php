<?php
// public/index.php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/controllers/MovieController.php';

// Ruteo simple
$uri = $_SERVER['REQUEST_URI'].'movies/popular';

if ($uri === $_SERVER['REQUEST_URI'].'movies/popular') {
    $controller = new MovieController();
    $controller->popular();
} else {
    http_response_code(404);
    echo "Ruta no encontrada.";
}