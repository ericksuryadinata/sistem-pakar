<?php
include("koneksi.php");

if (isset($_GET['id'])) {
    $kode_perbaikan = $_GET['id'];
    echo $kode_perbaikan;
    $select = "SELECT * FROM tb_jawaban INNER JOIN tb_jawaban_gejala ON tb_jawaban.kode_jawaban=tb_jawaban_gejala.kode_jawaban WHERE id_jwb = $kode_perbaikan";
    $query = mysqli_query($connect, $select);
    
    // var_dump($query);
    // die();;
    $totalRecord = mysqli_num_rows($query); // kalau 0 kita skip ke else
    $sukses = 0; // untuk mengetahui apakah insert ke tb_perbaikan dilakukan
    $gagal = 0; // sama aja kayak diatas
    if ($totalRecord > 0) {
    	$res = mysqli_fetch_all($query, MYSQLI_ASSOC);
        // seharusnya kalau sudah masuk block sini, maka bisa dikatakan bahwa tb_jawaban_gejala nya ada
        // jadi seharusnya bisa langsung insert ke tb_perbaikan
        for ($i = 0; $i < $totalRecord; $i++) {

            $kode_jawaban = $res[$i]['kode_jawaban'];
            $nama = $res[$i]['nama'];
            $nohp = $res[$i]['nohp'];
            $gejala = $res[$i]['gejala'];
            $solusi = $res[$i]['solusi'];

            $query1 = "INSERT INTO tb_perbaikan (`kode_perbaikan`, nama, nohp, gejala, solusi, `tgl`) VALUES ($kode_perbaikan, '" . $nama . "', '" . $nohp . "', '" . $gejala . "', '" . $solusi . "', 'NULL')";

            if (mysqli_query($connect, $query1)) {
                $sukses += 1;
            } else {
                $gagal += 1; // kemungkinan gagal ini sangat kecil sebenarnya
            }


            // ini block kode punya mu tak comment dulu
            // if (mysqli_query($connect, $query1)) {
            //     $update = "UPDATE tb_jawaban SET status`='setuju' WHERE `id_jwb = $kode_perbaikan ";
            //     mysqli_query($connect, $update);
            // } else {
            //       echo "No Error : ".mysqli_errno($connect); 
            //       echo "<br/>"; 
            //       echo "Pesan Error : ".mysqli_error($connect); 

            //     echo "<script type='text/javascript'> 
            //       alert('Terjadi kesalahan, silahkan coba lagi!.');  
            //      </script>"; 
            // }
        }

        // cek apakah datanya sudah masuk ke tb_perbaikan, ini seharusnya gak pakai, demi memastikan gpp lah
        if ($sukses > 0) {
            // baru kita update tb_jawabannya
            $update = "UPDATE tb_jawaban SET status='setuju' WHERE id_jwb = $kode_perbaikan ";
            mysqli_query($connect, $update);
            // terus redirect deh
            echo "<script type='text/javascript'> 
                  alert('Berhasil Diterima');
                  document.location = 'pakar-perbaikan.php';  
                 </script>"; 
        }
    } else {
        echo "Tidak ada jawaban dari gejala";
    }
}
?>