<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peliculas Populares</title>
  <!-- CSS propio -->
  <link rel="stylesheet" href="./css/slider.css">
  <!-- CSS de Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>
<body>
  <h1>Peliculas Populares</h1>
  <div class="movies-wrapper swiper">
  <div class="movie-grid swiper-wrapper">
    <?php foreach ($data->results as $movie): ?>
      <div class="swiper-slide movie-container">
        <img src="https://image.tmdb.org/t/p/w500<?= $movie->poster_path; ?>" alt="<?= $movie->title; ?>">
        <h2><?= $movie->title; ?></h2>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="pagination">
      <div class="swiper-pagination"></div>
  </div>
</div>

  <!-- JS de Swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <!-- JS propio -->
  <script src="./js/slider.js"></script>
</body>
</html>

<style>
  /* MOBILE POR DEFECTO */
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

  

  /* MOBILE OVERRIDE PARA SWIPER */
@media (max-width: 767px) {
  .swiper-wrapper,
  .swiper-slide {
    width: auto !important;
    height: auto !important;
  }

  .movies-wrapper {
    padding: 20px;
  }

  .movie-grid{
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
  }

  .movie-container {
    gap: 20px;
    text-align: center;
    background-color: #111;
    border-radius: 10px;
    padding: 10px;
    transition: transform 0.2s ease, box-shadow: 0.2s ease;
  }

  .movie-container:hover {
    transform: scale(1.05);
    box-shadow: 0 0 14px #ff0000;
  }

  .movie-container img {
    width: 100%;
    border-radius: 10px;
  }

  .movie-container h2 {
    color: #fff;
    font-size: 1.2em;
    margin-top: 10px;
  }
}

@media (min-width: 768px) {
  .movies-wrapper {
    width: 90%;
    margin: 0 auto;
    padding-bottom: 20px;
  }

  .swiper-slide {
    text-align: center;
    background-color: #111;
    color: #fff;
    border-radius: 10px;
    padding-top: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    /* padding-bottom: 40px; */
    height: auto;
    max-height: 700px;
    box-sizing: border-box;
  }

  .swiper-slide img {
    width: auto;
    height: auto;
    max-height: 100%;
    max-width: 300px;
    border-radius: 10px;
  }

  .swiper-slide h2 {
    margin-top: 10px;
    font-size: 1.2em;
  }

  .swiper-pagination {
    bottom: 10px; /* distancia desde el borde inferior */
    position: initial;
    z-index: 10;
  }

  .pagination {
    display: flex;
    justify-content: center; /* centra los dots */
    align-items: center;
    padding: 5px 10px;       /* espacio interno */
    background: rgba(179, 176, 176, 0.5); /* fondo semitransparente */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(204, 201, 201, 0.7);
    width: fit-content;       /* solo ocupa lo que necesita */
    margin: 0 auto;
    margin-top: 20px;           /* centra el contenedor */
  }
}

</style>
