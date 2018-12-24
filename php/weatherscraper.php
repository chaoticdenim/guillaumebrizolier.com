<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="weatherscraper.css">
    <title>Hello, world!</title>
  </head>
  <body>
    
  <form method>
    <div class="form-group">
      <input type="text" name="cityName" class="form-control" id="city" placeholder="Where do you wanna check the weather ?">
    </div>
    <button type="submit" class="btn btn-dark">Submit</button>
</form>

<div class ="jumbotron weather-text">

  <?php

  if($_GET)
  {

    function fixBlankSpaces($cityName) {
      $cityName = preg_replace("#\s#", "-", $cityName); //replace blank spaces with dashes
      return $cityName;
    }


    $city = $_GET["cityName"];
    $city = fixBlankSpaces($city); //fix blank spaces

    $codesource = file_get_contents("https://www.weather-forecast.com/locations/$city/forecasts/latest");
    preg_match_all("#(<h2>.+ Weather Today </h2>.+</span></p></td></tr><tr class=\"b-forecast__table-days js-forecast-header js-daynames\">)#", $codesource, $result);

    $forecast = $result[1][0]; //h2 titles for weather
    echo $forecast;
  }

  ?>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>