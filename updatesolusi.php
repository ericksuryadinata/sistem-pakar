<?php
include("koneksi.php");
if (isset($_POST['submit'])) {
 	$id = $_POST['id'];
    $solusi = $_POST['isi_solusi'];
    $jeniskerusakan = $_POST['jeniskerusakan'];
 
		$update = "UPDATE `tb_solusi` SET `isi_solusi`='$solusi', `jeniskerusakan`='$jeniskerusakan' WHERE `kode_solusi` = '".$id."'";
		// die($update);
		$query 	= mysqli_query($connect,$update);
		if($query){
			echo "<script type='text/javascript'>
					alert('Berhasil Update Data Solusi!'); 
					document.location = 'pakar-solusi.php'; 
				</script>";
		}else {
					echo "No Error : ".mysqli_errno($connect);
					echo "<br/>";
					echo "Pesan Error : ".mysqli_error($connect);

			echo "<script type='text/javascript'>
					alert('Terjadi kesalahan, silahkan coba lagi!.'); 
				</script>";
		}
}
// }
?>