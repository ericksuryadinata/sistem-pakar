<?php
session_start();
error_reporting(0);
include('koneksi.php');

if(!isset($_SESSION['admin'])==1)
  { 
header("location:loginpakar.php");
}
else{
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/icon.png">

    <title>Data Jawaban User</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>

    <nav class="navbar navbar-dark fixed-top bg-info flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Dashboard Pakar</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="proseslogout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <?php include 'pakar-sidebar.php';?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Jawaban</h1>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-sm" style="text-align: center;" >
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>No HP</th>
                  <th>Gejala</th>
                  <th>Solusi</th>
                  <th>Status</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                  
                  include "koneksi.php";
                  $no=0;
                  $sql = "SELECT * 
                          FROM tb_jawaban 
                          ORDER BY id_jwb DESC";
                  $data = mysqli_query($connect,$sql);
                  while ($row = mysqli_fetch_assoc($data)) {
                    $no++;?>
                    <tr>
                      <td> <?php echo $no ?></td>
                      <td style="text-align: left;"><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['nohp'] ?></td>                      
                      <td style="text-align: left;">
                        <ul>
                        <?php 
                        $kj = $row['kode_jawaban'];
                        $s = "SELECT * 
                          FROM tb_jawaban_gejala
                          WHERE kode_jawaban = '$kj' 
                          ";
                        $d = mysqli_query($connect,$s);
                        while ($r = mysqli_fetch_assoc($d)) {
                          echo "<li>".$r['gejala'] ."</li>";
                        }
                        ?>
                        </ul>
                      </td>
                      <td style="text-align: justify;">
                        <?php echo $row['solusi'] ?>
                      </td>
                      <td><?php echo $row['status'] ?></td>
                    <?php
                    if ($row['status']=='setuju'){
                      $disabled='disabled';
                    }else{
                      $disabled='';
                    }
                    ?>

                    <td>
                      <form action="terima.php?id='<?php echo $row["id_jwb"]?>'" method="POST">
                        <input type="hidden" name="nama" value="<?php echo $row['nama']; ?>">
                        <input type="hidden" name="gejala" value="<?php echo $row['gejala']; ?>">
                        <input type="hidden" name="solusi" value="<?php echo $row['solusi']; ?>">
                        <button type='submit' class='btn btn-sm btn-info' <?php echo $disabled;?>><i class='fa fa-check'></i> Terima

                      </form>

                    </td>

                  <?php

                    // echo "<tr>";
                    // echo '<td>'.$no.'</td>';
                    //   echo '<td>'.$row['nama'].'</td>';
                    //   echo '<td>'.$row['nohp'].'</td>';
                    //   echo '<td>'.$row['gejala'].'</td>';
                    //   echo '<td>'.$row['solusi'].'</td>';             
                    //   echo '<td>'.$row['status'].'</td>'; 
                    //   echo "<td><a type='submit' class='btn btn-sm btn-info' href=terima.php?id=".$row['kode_jwb']." >Terima</td>";
                      //echo "<td><a type='submit' class='btn btn-sm btn-danger' href=edit.php?id=".$row['kode_kesimpulan'].">Edit</a></td>";
                      //echo "<td><a type='submit' class='btn btn-sm btn-danger' href=hapus.php?id=".$row['kode_kesimpulan'].">Hapus</a></td>";
                  }
                  
                  ?>
                </tr>
              </tbody>

            </table>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>



  </body>
</html>
<?php }?>