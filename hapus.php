<?php
  include("koneksi.php");

  $query = "DELETE FROM tb_kesimpulan where kode_kesimpulan=" . $_GET['id'];
  if (mysqli_query($connect,$query)){
  	echo "<script type='text/javascript'>
			alert('Data berhasil dihapus.'); 
			document.location = 'pakar-data.php'; 
		</script>";
    //header("location:pakar-data.php");
  }
  else {
	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'skuter.php'; 
		</script>";
	}
 ?>
