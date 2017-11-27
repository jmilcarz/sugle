<?php $bgRandNumber = rand(1, 4); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>sugle search</title>
     <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed|Fira+Sans|Shrikhand" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
     <div id="searchEngine">
          <?php
               if ($bgRandNumber === 1) {
                    echo '<img src="assets/img/bg1-small.jpg" alt="" class="background-img">';
               }elseif ($bgRandNumber === 2) {
                    echo '<img src="assets/img/bg2-small.jpg" alt="" class="background-img">';
               }elseif ($bgRandNumber === 3) {
                    echo '<img src="assets/img/bg3-small.jpg" alt="" class="background-img">';
               }elseif ($bgRandNumber === 4) {
                    echo '<img src="assets/img/bg4-small.jpg" alt="" class="background-img">';
               }else {
                    echo "Ooops, something went <b>wrong</b> :/";
                    exit();
               }
          ?>
          <div class="search-engine-wrapper">
               <div class="search-engine-logo">
                    <h1>Sugle</h1>
               </div>
          </div>
     </div>


     <script>
          var image = document.images[0];
          var bigImage = document.createElement("img");

          bigImage.onload = function() {
               image.src = this.src;
               image.className = "noblur";
          }
          setTimeout(function() {
               <?php
                    if ($bgRandNumber === 1) {
                         echo 'bigImage.src = "assets/img/bg1-big.jpg"';
                    }elseif ($bgRandNumber === 2) {
                         echo 'bigImage.src = "assets/img/bg2-big.jpg"';
                    }elseif ($bgRandNumber === 3) {
                         echo 'bigImage.src = "assets/img/bg3-big.jpg"';
                    }elseif ($bgRandNumber === 4) {
                         echo 'bigImage.src = "assets/img/bg4-big.jpg"';
                    }else {
                         echo "Ooops, something went <b>wrong</b> :/";
                         exit();
                    }
               ?>
          }, 50);
     </script>
</body>
</html>
