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
include "koneksi.php";

$query = "SELECT max(kode_gejala) as maxKode FROM tb_gejala";
$hasil = mysqli_query($connect,$query);
$data = mysqli_fetch_array($hasil);
$kodegejala = $data['maxKode'];
$no = (int) substr($kodegejala, 1, 2);
$no++;
$char = "G";
$kodegejala = $char . sprintf("%02s", $no);
echo $kodegejala;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/icon.png">
  <title>Input Data Gejala</title>
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/style.css">
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="js/validator.js"></script>
	    <!-- Bootstrap core CSS -->
	<link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/dashboard.css" rel="stylesheet">

	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
        	 <h1 class="h2">Input Data Kerusakan</h1>
          </div>
      	<form class="form-horizontal" data-toggle="validator" role="form" method="post" action="">
          <div class="form-group has-feedback">
				<label class="control-label col-sm-2" for="nama">Kode Gejala :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="kode_gejala" data-error="Isi kolom dengan benar" value="<?php echo $kodegejala ?>" readonly required="required">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label class="control-label col-sm-2" for="nama">Gejala :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="gejala" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
				</div>
			</div>
			<div class="form-group ">
				<label class="control-label col-sm-2" for="alamat">Jenis Kerusakan :</label>
				<div class="col-sm-10">           
				<select class="form-control" name="jeniskerusakan" onChange='this.form.submit();'>
				<option hidden="true">Pilih</option>
				<option disabled="disabled" default="true">Pilih</option>	
				<option value="Cetakan">Cetakan</option>
                <option value="Kertas">Kertas</option>
                <option value="Lampu">Lampu</option>
  				</select>                   
				</div>
			</div>	
			<!-- <div class="form-group has-feedback">
				<label class="control-label col-sm-2" for="nama">Solusi :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="gejala" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
				</div>
			</div> -->
          <!-- <div class="form-group ">
				<label class="control-label col-sm-2" for="alamat">Jenis Tanaman:</label>
				<div class="col-sm-10">
					<select class="form-control" name="jenistanaman"  onChange='this.form.submit();'>
				<option>Tanaman</option>
                <option>Bawang</option>
                <option>Cabai</option>
  		</select>
                    
				</div>
			</div>	 -->
                <button type="submit" name ="submit" class="btn btn-primary">Simpan</button>
         		 		<?php			
                    if(isset($_POST['submit'])){
                    $kodegejala     = $_POST['kode_gejala'];
                    $gejala       = $_POST['gejala'];
                    // $daerah       = $_POST['daerah'];
                    $jeniskerusakan = $_POST['jeniskerusakan'];
                    $query="INSERT INTO tb_gejala VALUES ('" . $kodegejala . "','" . $gejala . "','" . $jeniskerusakan . "')";
                    // die($query);
                  	$result=mysqli_query($connect, $query);                
                        if($result){
                         	echo "<script type='text/javascript'>
													alert('Data berhasil disimpan!'); 
													document.location = 'pakar-gejala.php'; 
													</script>";
                        }
                    }
              	?>
		</form>		
    </div>
  </div>
</div>

<!-- <footer class="container-fluid text-center">
  <p>&copy; 2021 | By Intan Vini Annisa</p>
</footer> -->

</body>
</html>
<?php }?>