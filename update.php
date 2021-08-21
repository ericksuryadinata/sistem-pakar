<?php
include("koneksi.php");
if (isset($_POST['submit'])) {
 	$id = $_POST['id'];
    $gejala = $_POST['gejala'];
    $solusi = $_POST['solusi'];
 
  //   $select = "SELECT * FROM `tb_kesimpulan` WHERE `kode_kesimpulan` = $kode_kesimpulan";
  //   $query = mysqli_query($connect, $select);
  //   if($query){
  //       $fetch = mysqli_fetch_assoc($query);
  //        // echo $nama  = $fetch['nama'];
  //        echo $gejala = $fetch['gejala'];
  //        echo $solusi = $fetch['solusi'];
  //        // echo $tgl = $fetch['tgl'];

		// // $tgl2 = date("Y-m-d");
		$update = "UPDATE `tb_kesimpulan` SET `gejala`='$gejala', `solusi`='$solusi' WHERE `kode_kesimpulan` = '".$id."'";
		// die($update);
		$query 	= mysqli_query($connect,$update);
		if($query){
			echo "<script type='text/javascript'>
					alert('Berhasil Update Data Kerusakan!'); 
					document.location = 'pakar-kerusakan.php'; 
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