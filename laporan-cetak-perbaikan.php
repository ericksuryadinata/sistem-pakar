<?php
session_start();
include('koneksi.php');

if(!isset($_SESSION['admin'])==1)
  { 
header("location:loginpakar.php");
}
else{
 ?>

<!-- <?php
include 'koneksi.php';

$sql1 	= "SELECT * FROM tb_perbaikan GROUP BY kode_perbaikan ASC";
$query1 = mysqli_query($connect,$sql1);
$result = array();
for ($i=0; $i < $row = mysqli_fetch_array($query1); $i++) { 
	$result[$i] = $row;
}

?> -->

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

        <main role="main">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          </div>
          <section id="body-of-report">
			<div class="container-fluid">
			<h4 class="text-center">Toko Service Elektronik</h4>
			<h5 class="text-center">Jl. Mangga I, Jatiuwung, Kota Tangerang</h5>
			<hr />
			<h4 class="text-center"><u>Detail Laporan Data Perbaikan</u></h4>
			<br />
			<table class="table table-bordered">
			<thead class="table-dark">
				<tr align="center">
					<th scope="col">No</th>
					<th scope="col">Nama</th>
					<th scope="col">Gejala</th>
					<th scope="col">Solusi</th>
					<th scope="col">Tanggal</th>
				</tr>
			</thead>
			<tbody>
				<?php
                  include "koneksi.php";
                  $no=0;
                  $sql = "SELECT * from tb_perbaikan GROUP BY kode_perbaikan ASC";
                  $data = mysqli_query($connect,$sql);
                  while ($row = mysqli_fetch_assoc($data)) {
                    $no++;?>
					<tr>
						<td><?php echo $no ?></td>
						<th><?php echo $row['nama'] ?></th>
						<th>
							<ul>
                          <?php 
                        $kp = $row['kode_perbaikan'];
                        $s = "SELECT * 
                          FROM tb_perbaikan
                          WHERE kode_perbaikan = '$kp' 
                          ";
                        $d = mysqli_query($connect,$s);
                        while ($r = mysqli_fetch_assoc($d)) {
                          echo "<li>".$r['gejala'] ."</li>";
                        }
                        ?>
                        </ul> 
						</th>
						<th><?php echo $row['solusi'] ?></th>
						<th><?php echo $row['tgl'] ?></th>
					</tr><?php
				}?>

				
				
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
