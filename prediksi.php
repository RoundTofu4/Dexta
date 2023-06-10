<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Pricing</title>
</head>

<body style="overflow-x: hidden;">
<?php include 'navbar.php'?>
  <div class="text-dark py-1" id="section1" style = "Background-color : #CCCC;">
    <div class="container-fluid px-0">
      <div class="row">
        <div class="col-md-12 text-center">
          <blockquote class="blockquote">
            <h1 class="mb-0 px-5 py-5">Silahkan Input Kebutuhan Anda!</h1>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-light text-dark py-5" id="section2">
    <div class="container px-0">

      <form method="POST" action="hasil.php">
        
        <div class="row">
          <div class="col-md-5 ">
            <input type="number" name="durasi" class="form-control" placeholder="Durasi Sewa">
          </div>
          <div class="col-md-7 ">
            <p>Dalam Hari</p>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-5 ">
            <input type="number" name="area" class="form-control" placeholder="Coverage Area">
          </div>
          <div class="col-md-7 ">
            <p>Dalam m&sup2</p>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-5 ">
            <input type="number" name="chanel" class="form-control" placeholder="Kebutuhan Channel">
          </div>
          <div class="col-md-7 ">
            <p>Jumlah Channel</p>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-5">
            <select name="skala" class="form-select" aria-label="Default select example">
              <option disabled selected>Pilih Kebutuhan</option>
              <option value="Konser">Konser</option>
              <option value="Festival">Festival</option>
              <option value="Konferensi">Konferensi</option>
              <option value="Korporat">Korporat</option>
              <option value="Pameran">Pameran</option>
              <option value="School Event">School Event</option>
              <option value="Wedding">Wedding</option>
            </select>
          </div>
          <div class="col-md-7">
            <p>Skala Kebutuhan</p>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-2">
            <input class="form-check-input" type="radio" name="venue" id="flexRadioDefault1" value="Indoor" checked>
            <label class="form-check-label" for="flexRadioDefault1">Indoor</label>
          </div>
          <div class="col-md-2">
            <input class="form-check-input" type="radio" name="venue" id="flexRadioDefault1" value="Outdoor">
            <label class="form-check-label" for="flexRadioDefault1">Outdoor</label>
          </div>
          <div class="col-md-7">
            <p>Venue</p>
          </div>
        </div>

        <br>
        <div class="row">
          <div class="col-md-5 ">
            <input type="submit" class="btn btn-outline-dark btn-light" style="padding: 5px 242px 5px 242px">
          </div>
          <div class="col-md-7 ">

          </div>
        </div>


      </form>
  </div>
</div>
  <!-- Footer -->
  <?php include 'footer.php'?>
  <!--  -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>