<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Hasil</title>
</head>

<body style="overflow-x: hidden;">
<?php include 'navbar.php'?>
<div class="text-dark py-1" id="section1" style = "Background-color : #CCCC;">
  <div class="col-md-12 text-center">
      <blockquote class="blockquote">
        <h1 class="mb-0 px-5 py-5">Prediksi Harga Sewa</h1>
      </blockquote>
  </div>
</div>
<div>
  <?php
    $harga=0;
    $durasi = $_POST['durasi'];
    $area = $_POST['area'];
    $chanel = $_POST['chanel'];
    $skala = $_POST['skala'];
    $venue = $_POST['venue'];
    if ($skala=="Konser"||$skala=="Festival") {
      $harga=10000*$area;
    }
    elseif ($skala=="Konferensi"||$skala=="Korporat") {
      $harga=25000*$area;
    }
    elseif ($skala=="Pameran"||$skala=="School Event") {
      $harga=12000*$area;
    }
    elseif ($skala=="Wedding") {
      $harga=8500*$area;
    }    
    if ($venue=="Outdoor") {
      $harga=$harga+(0.1*$harga);
    }
    $harga=$harga*$durasi;
  ?>
  <br>
  <div class="container px-0" style="font-size: 20px; color:black;">
    <div class="row">
      <div class="col-12"><h2>Harga Sewa Anda Berkisar Rp<?=number_format("$harga", 0, ",", ".");?></h2></div>
    </div>
    <br>
    <div class="row">
      <div class="col-3"><p>Kebutuhan Acara</p></div>
      <div class="col-5"><p><?=$skala?></p></div>
      <div class="col-6"></div>
    </div>
    <div class="row">
      <div class="col-3"><p>Durasi</p></div>
      <div class="col-5"><p><?=$durasi?> Hari</p></div>
      <div class="col-6"></div>
    </div>
    <div class="row">
      <div class="col-3"><p>Luas</p></div>
      <div class="col-5"><p> <?=$area?>m&sup2</p></div>
      <div class="col-6"></div>
    </div>
    <div class="row">
      <div class="col-3"><p>Kebutuhan Channel</p></div>
      <div class="col-5"><p> <?=$chanel?></p></div>
      <div class="col-6"></div>
    </div>
    <div class="row">
      <div class="col-3"><p>Kebutuhan Venue</p></div>
      <div class="col-5"><p> <?=$venue?></p></div>
      <div class="col-6"></div>
    </div>
    <br>
    <div class="row">
      <div class="col-12"><a class="btn btn-success" target="_blank" href="https://wa.me/+6285107029301?text=Halo Dexta, saya mau sewa untuk kebutuhan acara <?=$skala?> dengan durasi <?=$durasi?> hari, dengan luas penonton <?=$area?>m&sup2, dan kebutuhan <?=$chanel?> channel untuk venue <?=$venue?>">WA Admin</a></div>
    </div>
    <br>
  </div>
</div>
  <br>
  <!-- Footer -->
  <?php include 'footer.php'?>
  <!--  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>