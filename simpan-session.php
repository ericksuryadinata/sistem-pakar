<?php
    include("koneksi.php");
    $user = $_POST['nama'];
    $nohp = $_POST['nohp'];
    session_start();
    $_SESSION['gejala_awal'] = '';
    $_SESSION['gejala_1'] = '';
    $_SESSION['gejala_2'] = '';
    $_SESSION['gejala_3'] = '';
    $_SESSION['nama'] = $user; //nyimpen session nama
    $_SESSION['nohp'] = $nohp; //nyimpen session nohp
    header('location:question.php');
?>