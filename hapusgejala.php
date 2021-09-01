<?php
  include("koneksi.php");

  $query = "DELETE FROM tb_gejala where kode_gejala='".$_GET['id']."'";
  if (mysqli_query($connect,$query)){
  	echo "<script type='text/javascript'>
			alert('Data berhasil dihapus!'); 
			document.location = 'pakar-gejala.php'; 
		</script>";
  }
  else {
	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'pakar-gejala.php'; 
		</script>";
	}
 ?>
