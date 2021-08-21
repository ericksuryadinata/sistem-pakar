<?php
include("koneksi.php");
if (isset($_GET['id'])){
    $kode_perbaikan = $_GET['id'];
 
    $select = "SELECT * FROM `tb_perbaikan` WHERE `kode_perbaikan` = $kode_perbaikan";
    $query = mysqli_query($connect, $select);
    if($query){
        $fetch = mysqli_fetch_assoc($query);
         // echo $nama  = $fetch['nama'];
         // echo $gejala = $fetch['gejala'];
         // echo $solusi = $fetch['solusi'];
         // echo $tgl = $fetch['tgl'];

		$tgl2 = date("Y-m-d");
		$update = "UPDATE `tb_perbaikan` SET `tgl`='$tgl2' WHERE `kode_perbaikan` = $kode_perbaikan ";
		// die($update);
		$query 	= mysqli_query($connect,$update);
		if($query){
			echo "<script type='text/javascript'>
					alert('Berhasil Konfirmasi Perbaikan!'); 
					document.location = 'pakar-perbaikan.php'; 
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
}
?>