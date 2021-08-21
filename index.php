<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="website sistem pakar">
  <meta name="author" content="mrs i">
  <link rel="icon" href="image/icon.png">

  <title>Sistem Pakar Diagnosa Kerusakan Printer</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/carousel.css" rel="stylesheet">
</head>

<body>
  <?php
  include('navbar.php');
  ?>

  <main role="main">
    <!-- Carousel -->
    <div id="myCarousel" class="carousel" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="image/bg-1.gif" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Sistem Pakar</h1>
              <p>Mempermudah Dalam Proses Diagnosis Kerusakan Printer</p>
              <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="image/bg-1.gif" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Printer bermasalah?</h1>
              <p>Cek Sekarang !</p>
              <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
            </div>
          </div>
        </div>
        <div class="container marketing">
          <div class="row justify-content-md-center">
            <div class="col-lg-4">
              <img class="rounded-circle" src="image/2.png" alt="Generic placeholder image" width="50" height="50">
              <h5>By @intnvni</h5>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> <!-- Carousel -->

    <!---------------- MODAL ----------------->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Masukan Identitas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nama :</label>
                <input type="text" name="nama" class="form-control" id="input-name" placeholder="Masukan Nama Anda" required autofocus>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">No HP :</label>
                <input type="text" name="nohp" onkeypress="return event.charCode >= 48 && event.charCode <=57" maxlength="13" minLength="12" class="form-control col-sm-8" placeholder="Masukan No HP Anda" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-info">Lanjut ></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!---------------- MODAL ----------------->

    </div>
  </main>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

</html>