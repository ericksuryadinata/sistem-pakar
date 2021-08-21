<?php
$token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet) - 1;
        for ($i=0; $i < 5; $i++) {
            $token .= $codeAlphabet[mt_rand(0, $max)];
        } 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="mr k">
    <link rel="icon" href="image/icon.png">

    <title>Sistem Pakar</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include ('navbar.php'); ?>
    
    <main class="batas-atas">
        <div class="card text-white bg-info mb-3">
          <h5 class="card-header">Hasil Diagnosa dan Solusi</h5>
          <div class="card-body text-left ukuran-20">

            <form method="post" action="solusi.php" enctype="multipart/form-data" role="form">

                <?php
                include ('koneksi.php');
                //$kode='m01';
                session_start();
                echo "<p>Nama : ".$_SESSION['nama']."</p>";
                echo "<p>No HP : ".$_SESSION['nohp']."</p>";
                    
                    if(isset($_GET['kode'])){
                        $kode=$_GET['kode'];
                    }   
                ?>
                <hr>
                <p style="margin-bottom: -25px;">Gejala yang Dialami :</p>
                <?php
                 include "fungsi.php";
                 $ss = solusi($kode,$token);  
                 echo "<ul>";
                 $cs = count($ss['msg']);
                 for ($i=0; $i < $cs; $i++) { 
                   echo "<li>".$ss['msg'][$i]."</li>";
                   // $gejala = $ss['data'][$i];
                   // mysqli_query($connect,"INSERT INTO `tb_jawaban_gejala`(`kode_gejala`,`gejala`, `kode_jawaban`) VALUES ('$kode','$gejala','$token')");
                 }
                 echo "</ul>";
                ?>
                

                <hr>
                <?php
                if($kode !== 'aman'){
                  $sql = "SELECT * from tb_solusi WHERE kode_solusi='$kode'";
                  $data = mysqli_query($connect, $sql);
                  $row = mysqli_fetch_assoc($data);

                  if ($row['kode_solusi'] == "x-1" || $row['isi_solusi'] == "x-2" || $row['isi_solusi'] == "x-3" || $row['isi_solusi'] == "x-4" || $row['isi_solusi'] == "x-5") {
                    echo "<center><p><strong style='color:red'>SISTEM TIDAK MENEMUKAN JAWABAN !</strong></p></center><hr>";
                  } else {
                    echo "<p>Solusi Untuk Mengatasi : </br><strong style='color:green'>" . $row['isi_solusi'] . "</strong></p>";
                  }               
                } else {
                  $row['isi_solusi'] = 'Tidak Terdapat Solusi Untuk Gejala Ini, karena Sepertinya Tidak Ada Gejala Yang Dikeluhkan';
                  echo "<p>".$row['isi_solusi']."</p>";
                }
                
                ?>
            </form>
            <?php
                // include "fungsi.php";
                // answer($kode);  
              ?>
            <br>
            <form method="POST" action="proses_jawaban.php">
              <?php
              for ($i=0; $i < $cs; $i++) { 
                   $gejala = $ss['data'][$i];
                 
              ?>
                <input type="hidden" name="ss[]" value="<?=$gejala?>">
              <?php
              }
              ?>
              <input type="hidden" name="kode" value="<?=$kode?>">
              <input type="hidden" name="msg_gejala" value="<?=$kode?>">
              <input type="hidden" name="solusi" value="<?=$row['isi_solusi']?>">
              <div class="text-center">
                <button type="submit" style="margin-bottom: 10px; background-color: black;" class="btn btn-outline-light col-sm-2">Akhiri</button>
            </div>
            </form>
            
          </div>
          
        </div>
    
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>

<!-- <?php
  // include "fungsi.php";
  // input($kode);  

?> -->

<!-- <?php
// include "koneksi.php";
// if (!empty($_POST['masukan'])){
// $fakta= $_POST['fakta'];
// $solusi=$_POST['solusi'];
// $oleh=$_SESSION['nama'];
// $status="menunggu";

// $sql1 = "INSERT INTO tb_jawaban (solusi, fakta, oleh, status) VALUES ('$solusi', '$fakta', '$oleh', '$status')";
// if (mysqli_query($connect,$sql1)){
//     echo "<script>alert('Saran berhasil dimasukan, harus menunggu moderasi!'); window.location=('hapus-session.php');</script>";
// //echo "<script type='text/javascript'>window.location.replace('pakar-mode.php');</script>";
//   }
//   else  echo "<script>alert('gagal');</script>";
// }

?> -->