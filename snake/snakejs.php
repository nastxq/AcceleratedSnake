<?php
session_start();
 ?>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylesnake.css">

</head>
<body onload=startGame() id="snbody">
 
<main>

<div class="container-fluid padding">
  <div class="row text-center">

 <div class="col-md-3 mysnake">
  <img src="imgs/snakepix.png" >
  <hr class="dark col-md-8">
  <div class="tutor">
    <img src="imgs/kiafries.png"><p class="lead">Dodaje punkty Score i zwiększa prędkość węża </p>

  </div>
 </div>
  <div class="col-md-6 game">
  <canvas id="snake" width="608" height="608">
  </canvas>
  </div>
  <div class="col-md-3 mysnake">
    <img src="imgs/snakepix2.png " >
    <hr class="dark col-md-8">
    <div class="tutor">
  <img src="imgs/smile.png"><p class="lead"> Nie dodaje punktów Score i na jakiś czas zwiększa prędkość lecz po chwili wąż wraca do standardowej szybkości </p>
</div>
  </div>


<div class="col-md-12 text-center">
  <button class="btn btn-primary" id="bs" onclick=reset()> START AGAIN </button>
  <hr class="dark last">
</div>

</div>
</div>

<script src="sn.js">


 </script>


</main>
</body>
</html>
