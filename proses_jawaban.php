<?php
include ('koneksi.php');
session_start();
print_r( $_POST['ss']);
echo "<br>";
echo count($_POST['ss']);

echo "<hr>";
echo "Ini kode jawaban : ".$_POST['kode'];
echo "<br>";
echo "Ini nama : ".$_SESSION['nama'];
echo "<br>";
$token = "";
  $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet) - 1;
        for ($i=0; $i < 5; $i++) {
            $token .= $codeAlphabet[mt_rand(0, $max)];
        } 
$sql = "
	INSERT INTO `tb_jawaban`
		(`kode_jawaban`, `nama`, `nohp`, `solusi`, `status`) 
	VALUES 
		('$token','$_SESSION[nama]','$_SESSION[nohp]','$_POST[solusi]','belum setuju')";
$resp = mysqli_query($connect,$sql);

if ($resp) {
	for ($i=0; $i < count($_POST['ss']); $i++) { 
		$gejala = $_POST['ss'][$i];
		$sql1 = "
		INSERT INTO `tb_jawaban_gejala`
			(`gejala`, `kode_jawaban`) 
		VALUES 
			('$gejala','$token')";
		mysqli_query($connect,$sql1);
	}
	echo "<script>alert('Berhasil')</script>";
	echo "<script>window.location = 'index.php';</script>";

}





// INSERT INTO `tb_jawaban`(`kode_jwb`, `kode_jawaban`, `nama`, `nohp`, `solusi`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
?>