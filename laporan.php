<?php
session_start();
include('koneksi.php');

if(!isset($_SESSION['admin'])==1)
  { 
header("location:loginpakar.php");
}
else{
 ?>
<?php 
session_start();
include "koneksi.php";

if (isset($_POST['laporan'])) {
	$value_laporan = $_POST['laporan'];
	if ($value_laporan == "jawaban") {
		header("location:laporan-cetak-jawaban.php");
	}else if ($value_laporan == "perbaikan") {
		header("location:laporan-cetak-perbaikan.php");
	}else if ($value_laporan == "kerusakan") {
    header("location:laporan-cetak-kerusakan.php");
  }
	
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/icon.png">

    <title>Laporan Data Pakar</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <script type="text/javascript">
    	window.history.replaceState(null,null,window.location.href);
    </script>
  </head>

  <body>

    <nav class="navbar navbar-dark fixed-top bg-info flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Dashboard Pakar</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="proseslogout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <?php include 'pakar-sidebar.php';?>

        <main role="" class="col-md-5 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Laporan</h1>
          </div>
          <div class="card">

			  <div class="card-body">
			  	<form method="post">
				  <div class="form-group col-md-2">
				    <label for="exampleFormControlInput2">Pilih Jenis Laporan :</label>
				    <select name="laporan" class="form-control" id="exampleFormControlSelect2">
						<option selected="true" disabled="disabled" value="">Pilih</option>
            <option value="jawaban">Jawaban</option>
						<option value="perbaikan">Perbaikan</option>
            <option value="kerusakan">Kerusakan</option>
					</select><br>
          <input type="submit" class="btn btn-info" style="width:100%;" value="Lihat Laporan" name="view">
				  </div>

				  
				</form>		    
			  </div>
			</div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>    
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>
<?php }?>