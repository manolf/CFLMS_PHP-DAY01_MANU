<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>advanced</title>
</head>
<body>

<?php

echo "<h1 class='mx-auto'>What is the temperature?</h1>";

global $input;
global $celsius;
function fahrenheit_celsius($input){

    $celsius = ($input-32)/1.8;
    $formatted = sprintf("%01.2f", $celsius);
//     echo "<div class='card mx-auto' style='width: 18rem;'>
//     <img class='card-img-top' src='https://cdn.pixabay.com/photo/2017/11/07/00/07/fantasy-2925250_960_720.jpg' alt='very cold'>
//     <div class='card-body'>
//       <p class='card-text'> <h4>Weather Information: " . $formatted . " &#x2103; : Very Cold!</h4><p><b> Do not forget gloves!</b><br> The finger are freezing at first.</p>
//     </div>
//   </div>";

    if ($celsius <= 5){
        echo "<div class='card mx-auto' style='width: 18rem;'>
        <img class='card-img-top' src='https://cdn.pixabay.com/photo/2017/11/07/00/07/fantasy-2925250_960_720.jpg' alt='very cold'>
        <div class='card-body'>
          <p class='card-text'> <h4>Weather Information: " . $formatted . " &#x2103; : Very Cold!</h4><p><b> Dont forget the gloves!</b><br> The fingers are freezing at first!</p>
        </div>
      </div>";

    }else if ($celsius > 5 && $celsius <=10){

        echo "<div class='card mx-auto' style='width: 18rem;'>
        <img class='card-img-top' src='https://cdn.pixabay.com/photo/2016/10/25/14/03/clouds-1768967_960_720.jpg' alt='cold'>
        <div class='card-body'>
          <p class='card-text'> <h4>Weather Information: " . $formatted . " &#x2103; : Cold!</h4><p><b> Take your vitamins!</b><br> Be prepared!</p>
        </div>
      </div>";

    }else if ($celsius > 10 && $celsius <=15){

        echo "<div class='card mx-auto' style='width: 18rem;'>
        <img class='card-img-top' src='https://cdn.pixabay.com/photo/2013/11/28/10/36/road-220058_960_720.jpg' alt='pleasant'>
        <div class='card-body'>
          <p class='card-text'> <h4>Weather Information: " . $formatted . " &#x2103; : Pleasant!</h4><p><b> Hurry, its getting warmer</b><br> Get out!</p>
        </div>
      </div>";


    }else if ($celsius > 15 && $celsius <=20){

        echo "<div class='card mx-auto' style='width: 18rem;'>
        <img class='card-img-top' src='https://cdn.pixabay.com/photo/2014/02/27/16/10/spring-276014_960_720.jpg' alt='warm'>
        <div class='card-body'>
          <p class='card-text'> <h4>Weather Information: " . $formatted . " &#x2103; : Warm!</h4><p><b> Spring is coming!</b><br> Finally no more jacket needed!</p>
        </div>
      </div>";

    }else if ($celsius > 20){
        echo "<div class='card mx-auto' style='width: 18rem;'>
        <img class='card-img-top' src='https://cdn.pixabay.com/photo/2015/03/26/11/48/gobi-692640_960_720.jpg' alt='hot'>
        <div class='card-body'>
          <p class='card-text'> <h4>Weather Information: " . $formatted . " &#x2103;: Hot!</h4><p><b> Time to look for something wet to dive your head in!</b><br>Alternatively: try to drink enough water (or beer)!</p>
        </div>
      </div>";

    }else{
        echo "ask somebody else please!";
    }

}

fahrenheit_celsius(40);
fahrenheit_celsius(50);
fahrenheit_celsius(55);
fahrenheit_celsius(60);
fahrenheit_celsius(75);



?>
    
</body>
</html>