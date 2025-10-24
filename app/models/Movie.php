<?php

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\RequestException;

class Movie{
  private $client;
  private $apiKey;

  public function __construct(){
    $this->client = new Client();
    $this->apiKey = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJlOWVhZTI2MTk5NGJiMjMxNjc2MTY5ZjZkMjdjMjVlZiIsIm5iZiI6MTc2MTE4ODc3Mi41NTMsInN1YiI6IjY4Zjk5YmE0Y2VlNjEwNTRmMzQxNzg2ZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.4oQ58iqqESJCNJV62FtrZFrqoWg8XhgBK4USg5VrJ6w';
  }

  public function getPopularMovies() {
    try {
      $response = $this->client->request('GET', 'https://api.themoviedb.org/3/movie/popular?language=en-US&page=1', [
        'headers' => [
          'Authorization' => 'Bearer '.$this->apiKey,
          'accept' => 'application/json',
        ],
      ]);

      $body = $response->getBody();
      $data = json_decode($body);

      return $data;
    } catch (ClientException $e) {
      echo "Client error: " . $e->getMessage();
      $response = $e->getResponse();
      $statusCode = $response ? $response->getStatusCode() : '400';
      $errorBody = $response ? $response->getBody()->getContents() : 'Error desconocido';
      echo "whit status code: ".$statusCode." and body: ".$errorBody;
    } catch (ServerException $e) {
      echo "Server error: " . $e->getMessage();
      $response = $e->getResponse();
      $statusCode = $response ? $response->getStatusCode() : '500';
      $errorBody = $response ? $response->getBody()->getContents() : 'Error desconocido';
      echo "whit status code: ".$statusCode." and body: ".$errorBody;
    } catch (RequestException $e) {
      echo "Request error: " . $e->getMessage();
    } catch (Exception $e) {
      echo "Error general: " . $e->getMessage();
      //throw $th;
    }
  }
}

?>