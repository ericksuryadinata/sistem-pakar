<?php
session_start();
error_reporting(0);
include('koneksi.php');

if(!isset($_SESSION['admin'])==1)
  { 
header("location:loginpakar.php");
}
else{
 ?>
<?php

include 'koneksi.php';

$sql1 	= "SELECT * FROM tb_jawaban";
$query1 = mysqli_query($connect/* ($connect) ini sesuain sama nama variable di koneksi */,$sql1);
$result = array();
for ($i=0; $i < $row = mysqli_fetch_array($query1); $i++) { 
	$result[$i] = $row;
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
  </head>

  <body>

    <nav class="navbar navbar-dark fixed-top bg-info flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="pakar-home.php">Dashboard Pakar</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="proseslogout.php">Sign out</a>
        </li>
      </ul>
    </nav>

	<div class="container-fluid">
      <!-- <div class="row"> -->

        <main role="main">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <!-- <h1 class="h2">Data Kerusakan</h1> -->
          </div>
          <section id="body-of-report">
			<div class="container-fluid">
			<h4 class="text-center">Toko Service Elektronik</h4>
			<h5 class="text-center">Jl. Mangga I, Jatiuwung, Kota Tangerang</h5>
			<hr />
			<h5 class="text-center">Detail Laporan Data Jawaban</h5>
			<br />
			<table class="table table-bordered">
			<thead class="table-dark">
				<tr align="center">
					<th scope="col">No</th>
					<th scope="col">Kode Jawaban</th>
					<th scope="col">Nama</th>
					<th scope="col">No HP</th>
					<th scope="col">Gejala</th>
					<th scope="col">Solusi</th>
					<th scope="col">Status</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no=0;
				if($result){foreach ($result as $data) {
				$no++;
				?>
					<tr>
						<th><?php echo $no ?></th>
						<th><?php echo $data['kode_jawaban'] ?></th>
						<th><?php echo $data['nama'] ?></th>
						<th><?php echo $data['nohp'] ?></th>
						<!-- <th><?php echo $data['kode_gejala'] ?></th>-->
						<th>
						<?php 
                        $kj = $data['kode_jawaban'];
                        $s = "SELECT * 
                          FROM tb_jawaban_gejala
                          WHERE kode_jawaban = '$kj' 
                          ";
                        $d = mysqli_query($connect,$s);
                        while ($r = mysqli_fetch_assoc($d)) {
                          echo "<li>".$r['gejala'] ."</li>";
                        }
                      	?>                      		
                      	</th>
						<th><?php echo $data['solusi'] ?></th>
						<th><?php echo $data['status'] ?></th>
					</tr>
					<?php
				}}?>
			
			</tbody>
			</table>
			</div><!-- /.container -->
		</section>
      	</main>
      	
      	

      
	<script>
		window.print();
	</script>

	<!-- Bootstrap Core JavaScript -->
	<script src="assets/new/bootstrap.min.js"></script>
	<!-- jTebilang JavaScript -->
	<script src="assets/new/jTerbilang.js"></script>

</body>
</html>
<?php }?>
