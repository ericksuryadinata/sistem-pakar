<?php
  include("koneksi.php");

  $query = "DELETE FROM tb_perbaikan where kode_perbaikan=" . $_GET['id'];
  if (mysqli_query($connect,$query)){
  	echo "<script type='text/javascript'>
			alert('Data berhasil dihapus.'); 
			document.location = 'pakar-perbaikan.php'; 
		</script>";
    //header("location:pakar-perbaikan.php");
  }
  else {
	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'pakar-perbaikan.php'; 
		</script>";
	}
 ?>
