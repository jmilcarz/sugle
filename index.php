<?php $bgRandNumber = rand(1, 4); ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>suggle search</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,600|Fira+Sans:400,600,800|Shrikhand" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
     <div id="searchEngine">
          <?php
               if ($bgRandNumber === 1) {
                    echo '<img src="assets/img/bg1-small.jpg" alt="" id="background-img" class="blur">';
               }elseif ($bgRandNumber === 2) {
                    echo '<img src="assets/img/bg2-small.jpg" alt="" id="background-img" class="blur">';
               }elseif ($bgRandNumber === 3) {
                    echo '<img src="assets/img/bg3-small.jpg" alt="" id="background-img" class="blur">';
               }elseif ($bgRandNumber === 4) {
                    echo '<img src="assets/img/bg4-small.jpg" alt="" id="background-img" class="blur">';
               }else {
                    echo "Ooops, something went <b>wrong</b> :/";
                    exit();
               }
          ?>
          <div class="search-engine-wrapper">
               <div class="search-engine-logo">
                    <h1>Suggle</h1>
               </div>
               <div class="search-engine-form">
                    <form action="search.php" method="get">
                         <input type="search" name="q" placeholder="Search google, wikipedia & web...">
                    </form>
                    <ul class="links">
                         <li><a href="https://www.google.com"><i class="fa fa-google"></i></a></li>
                         <li><a href="https://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                         <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="https://www.twitch.com"><i class="fa fa-twitch"></i></a></li>
                         <li><a href="https://www.trello.com"><i class="fa fa-trello"></i></a></li>
                         <li><a href="https://www.github.com"><i class="fa fa-github"></i></a></li>
                    </ul>
                    <div class="info">
                         <?php
                         $randHint = rand(1, 3);

                         if ($randHint === 1) {
                              echo '<p><b>hint!</b> If you want to search <b>wikipedia</b> then at the beginning of the query write <b>"wiki"</b>!</p>';
                         }elseif ($randHint === 2) {
                              echo '<p><b>hint!</b> If you want to search <b>google</b> then type anything you want!</p>';
                         }elseif ($randHint === 3) {
                              echo '<p><b>hint!</b> If you want to search <b>web</b> then type <b>full address</b> starting with <b>www</b>!</p>';
                         }
                         ?>
                    </div>
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
