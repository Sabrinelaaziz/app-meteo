<?php
header("Access-Control-Allow-Origin: *"); // autorise la requête fetch()
include 'config.php';

if (isset($_GET['city'])) {
    $city = urlencode($_GET['city']);

    // Construire l’URL avec ta clé API
    $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=" . API_KEY . "&units=metric";

    // Appel de l'API météo
    $response = file_get_contents($url);

    // Affichage des données météo en JSON
    echo $response;
}
?>
