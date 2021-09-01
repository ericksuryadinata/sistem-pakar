<?php
include("koneksi.php");
if (isset($_POST['submit'])) {
 	$id = $_POST['id'];
    $gejala = $_POST['gejala'];
    $jeniskerusakan = $_POST['jeniskerusakan'];
 
  //   $select = "SELECT * FROM `tb_kesimpulan` WHERE `kode_kesimpulan` = $kode_kesimpulan";
  //   $query = mysqli_query($connect, $select);
  //   if($query){
  //       $fetch = mysqli_fetch_assoc($query);
  //        // echo $nama  = $fetch['nama'];
  //        echo $gejala = $fetch['gejala'];
  //        echo $jeniskerusakan = $fetch['jeniskerusakan'];
  //        // echo $tgl = $fetch['tgl'];

		// // $tgl2 = date("Y-m-d");
		$update = "UPDATE `tb_gejala` SET `gejala`='$gejala', `jeniskerusakan`='$jeniskerusakan' WHERE `kode_gejala` = '".$id."'";
		// die($update);
		$query 	= mysqli_query($connect,$update);
		if($query){
			echo "<script type='text/javascript'>
					alert('Berhasil Update Data Gejala!'); 
					document.location = 'pakar-gejala.php'; 
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