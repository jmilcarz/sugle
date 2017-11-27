<?php
if (isset($_GET['q'])) {
$shqy = $_GET['q']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title><?php echo $shqy; ?> - suggle results</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,600|Fira+Sans:400,600,800|Shrikhand" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
     <?php require_once('modules/nav.php'); ?>

     <div class="container" id="suggle-search-results">
          <div class="column">
               <header>
                    <h1>Strony</h1>
               </header>
          </div>
          <div class="column">
               <header>
                    <h1>osoby</h1>
               </header>
          </div>
     </div>
</body>
</html>


<?php } ?>
