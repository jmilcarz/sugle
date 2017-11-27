<?php

if (isset($_GET['q'])) {
     $shqy = $_GET['q'];

     // wikipedia
          $isWiki = substr($shqy, 0, 4);
          if ($isWiki === "wiki") {
               $shqyWithOutWiki = substr($shqy, 4);
               $shqyWithOutW = str_replace('', '%20', $shqyWithOutWiki);
               $shqyW = $shqyWithOutW;
               header("Location: https://pl.wikipedia.org/w/index.php?search=" . $shqyW . "");
               exit();
          }

     // web
          $isWeb = substr($shqy, 0, 3);
          if ($isWeb === "www") {
               $shqyOnlyAdressWithExt = substr($shqy, 4);
               header("Location: https://www." . $shqyOnlyAdressWithExt . "");
               exit();
          }

     // simple redirects
          if ($shqy === "tw" || $shqy === "twitter") {
               header("Location: https://www.twitter.com");
               exit();
          }elseif ($shqy === "fb" || $shqy === "facebook" || $shqy === "zuck" || $shqy === "zuckerburg"){
               header("Location: https://www.twitter.com");
               exit();
          }elseif ($shqy === "twitch" || $shqy === "live" || $shqy === "stream" || $shqy === "livestream"){
               header("Location: https://www.twitch.com");
               exit();
          }elseif ($shqy === "izak" || $shqy === "izak live" || $shqy === "izak.tv" || $shqy === "izak tv"){
               header("Location: http://www.izak.pl");
               exit();
          }elseif ($shqy === "yt" || $shqy === "youtube" || $shqy === "youtube games" || $shqy === "youtube play"){
               header("Location: https://www.youtube.com");
               exit();
          }elseif ($shqy === "google" || $shqy === "google chrome"){
               header("Location: https://www.google.com");
               exit();
          }elseif ($shqy === "wikipedia" || $shqy === "wiki"){
               header("Location: https://pl.wikipedia.org");
               exit();
          }elseif ($shqy === "gonciarz" || $shqy === "krzysztofgonciarz" || $shqy === "zapytaj beczke"){
               header("Location: https://www.youtube.com/user/wybuchajacebeczki");
               exit();
          }elseif ($shqy === "trello"){
               header("Location: https://www.trello.com");
               exit();
          }elseif ($shqy === "github" || $shqy === "git"){
               header("Location: https://www.google.com");
               exit();
          }elseif ($shqy === "pasja informatyki" || $shqy === "mirosław zelent"){
               header("Location: http://www.miroslawzelent.pl");
               exit();
          }elseif ($shqy === "tvn" || $shqy === "tvn24"){
               header("Location: https://www.tvn24.pl");
               exit();
          }elseif ($shqy === "cnn"){
               header("Location: https://www.cnn.com");
               exit();
          }elseif ($shqy === "marvel" || $shqy === "dcsucks"){
               header("Location: https://www.marvel.com");
               exit();
          }elseif ($shqy === "onet"){
               header("Location: https://www.onet.pl");
               exit();
          }elseif ($shqy === "wp" || $shqy === "wirtualna polska"){
               header("Location: https://www.wp.pl");
               exit();
          }elseif ($shqy === "gmail"){
               header("Location: https://mail.google.com");
               exit();
          }elseif ($shqy === "instagram" || $shqy === "insta"){
               header("Location: https://www.instagram.com");
               exit();
          }elseif ($shqy === "messanger" || $shqy === "fb messanger"){
               header("Location: https://www.messanger.com");
               exit();
          }elseif ($shqy === "vk"){
               header("Location: https://www.vk.com");
               exit();
          }elseif ($shqy === "nk"){
               header("Location: http://www.nk.pl");
               exit();
          }elseif ($shqy === "microsoft" || $shqy === "login microsoft" || $shqy === "microsoft office" || $shqy === "microsoft office 365"){
               header("Location: https://login.microsoftonline.com");
               exit();
          }elseif ($shqy === "librus" || $shqy === "synergia librus" || $shqy === "librus synergia" || $shqy === "synergia"){
               header("Location: https://synergia.librus.pl");
               exit();
          }elseif ($shqy === "apple"){
               header("Location: https://www.apple.com");
               exit();
          }elseif ($shqy === "samsung"){
               header("Location: https://www.samsung.com");
               exit();
          }elseif ($shqy === "linkedin"){
               header("Location: https://www.linkedin.com");
               exit();
          }


     // suggle database

     $isSuggle = substr($shqy, 0, 6);
     if ($isSuggle === "suggle") {
          $suggleWithOutSuggle = substr($shqy, 7);
          header("Location: suggle.php?q=" . $suggleWithOutSuggle . "");
          exit();
     }

     // google
          if (!empty($shqy)) {
               header("Location: https://www.google.com/search?q=" . $shqy . "");
               exit();
          }
}else {
     header("Location: index.php");
     exit();
}
?>
