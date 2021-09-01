<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/icon.png">

    <title>Data Solusi</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
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

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Solusi</h1>
          </div>
         <div class="card">
			  <h5 class="card-header">Form Edit Data Solusi</h5>
			  <div class="card-body">
			  	<?php 
			  	include 'koneksi.php';
					$id=$_GET['id'];
					$sql ="SELECT * FROM tb_solusi WHERE kode_solusi='".$id."'";
					$query = mysqli_query($connect,$sql);
					$result = mysqli_fetch_array($query);
				?>

			  	<form action="updatesolusi.php" method="post">
				  <div class="form-group">
				    <label for="exampleFormControlInput2">Kode Solusi :</label>
				    <input type="hidden" name="id" value="<?php echo $result['kode_solusi'] ?>">
				    <input type="text" name="no" class="form-control" value="<?php echo ($result['kode_solusi']);?>" readonly>
				  </div>
		          <div class="form-group">
		            <label for="exampleFormControlInput2">Solusi :</label>
		            <input type="text" name="isi_solusi" class="form-control" id="exampleFormControlInput2" value="<?php echo ($result['isi_solusi']);?>">
		          </div>
		          <div class="form-group">
		            <label for="exampleFormControlInput2">Jenis Kerusakan :</label>
		             <input type="text" name="jeniskerusakan" class="form-control" id="exampleFormControlInput2" value="<?php echo ($result['jeniskerusakan']);?>">
		          </div>

				  <input type="submit" class="btn btn-info" name="submit">
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
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>