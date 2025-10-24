<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Peliculas Populares</h1>
  <div class="movies-grid">
    <?php foreach ($data->results as $movie): ?>
      <div class="movie-container">
        <img src="https://image.tmdb.org/t/p/w500<?= $movie->poster_path; ?>" alt="<?= $movie->title; ?>">
        <h2><?= $movie->title; ?></h2>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #000;
    margin: 0;
    padding: 0;
  }
  h1 {
    color: #fff;
    text-align: center;
    padding: 20px 0;
  }
  .movies-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
    padding: 20px;
  }

  .movie-container {
    text-align: center;
  }

  .movie-container img {
    width: 100%;
    height: auto;
    border-radius: 10px;
  }

  .movie-container h2 {
    font-size: 1.2em;
    margin-top: 10px;
    color: #fff;
  }
</style>