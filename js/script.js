

  const API_KEY = "de8967e84d4481b5d11f3cbcd805f791"; // Remplace avec ta clé API

  function getWeather() {
    const city = document.getElementById("city").value;
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${API_KEY}&units=metric`;

    fetch(url)
      .then(response => response.json())
      .then(data => {
        if (data.cod === 200) {
          document.getElementById("icon").src = `http://openweathermap.org/img/wn/${data.weather[0].icon}@2x.png`;
          document.getElementById("temp").innerText = `${Math.round(data.main.temp)}°C`;
          document.getElementById("desc").innerText = data.weather[0].description;
          document.getElementById("feels_like").innerText = data.main.feels_like;
          document.getElementById("humidity").innerText = data.main.humidity;
          document.getElementById("wind").innerText = data.wind.speed;
          document.getElementById("result").classList.remove("hidden");
        } else {
          alert("City not found");
        }
      })
      .catch(() => alert("Error fetching data"));
  }


