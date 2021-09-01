<?php
  include("koneksi.php");

  $query = "DELETE FROM tb_solusi where kode_solusi='".$_GET['id']."'";
  if (mysqli_query($connect,$query)){
  	echo "<script type='text/javascript'>
			alert('Data berhasil dihapus!'); 
			document.location = 'pakar-solusi.php'; 
		</script>";
  }
  else {
	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'pakar-solusi.php'; 
		</script>";
	}
 ?>
