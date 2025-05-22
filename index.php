<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h2 class="text-center mb-4">Weather App</h2>
  <div class="weather-box mx-auto col-md-6">
    <div class="mb-3">
      <input type="text" id="city" class="form-control" placeholder="Enter city name">
    </div>
    <button onclick="getWeather()" class="btn btn-primary mb-3">Get Weather</button>

    <div id="result" class="hidden">
      <img id="icon" src="" alt="Weather Icon" />
      <h1 id="temp"></h1>
      <p id="desc"></p>
      <div class="row text-white mt-3">
        <div class="col">
          <p>Feels like: <span id="feels_like"></span>°C</p>
        </div>
        <div class="col">
          <p>Humidity: <span id="humidity"></span>%</p>
        </div>
        <div class="col">
          <p>Wind: <span id="wind"></span> m/s</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="script.js"></script>
</body>
</html>