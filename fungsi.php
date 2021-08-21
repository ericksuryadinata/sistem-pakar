<?php

function answer($kode){
    if($kode=='m1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m2&from=m1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m1-a'>Tidak</a>";
        // G01
    }
    if($kode=='m1-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m2&from=m1-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m1'>Tidak</a>";
        // G02
    }


    if($kode=='m2'){
        $_SESSION['gejala_awal'] = ($_GET['from'] === 'm1') ? 'G01' : 'G02';
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m2-a&from=m2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m3&from=null'>Tidak</a>";
        // YA, gejala[] G03 ke m2-a untuk menentukan apakah G04
        // TIDAK, ke m3 untuk menentukan apakah G08
    }
    if($kode=='m2-a'){
        $_SESSION['gejala_1'] = ($_GET['from'] === 'm2') ? 'G03' : '';
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m3&from=m2-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m2-b'>Tidak</a>";
        // YA, gejala[] G04 ke m3 untuk menentukan apakah G08
        // TIDAK, ke m2-b untuk menentukan apakah G05
    }
    if($kode=='m2-b'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S03'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m2-c'>Tidak</a>";
        // YA, gejala[] G05, menuju solusi S03
        // TIDAK, ke m2-c untuk menentukan apakah G06
    }
    if($kode=='m2-c'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S04'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m2-d'>Tidak</a>";
        // YA, gejala[] G06, menuju solusi S04
        // TIDAK, ke m2-d untuk menentukan apakah G07
    }
    if($kode=='m2-d'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S07'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m3&from=m2-d'>Tidak</a>";
        // YA, gejala[] G07, menuju solusi S07
        // TIDAK, ke m3 untuk menentukan apakah G08
    }


    if($kode=='m3'){
        $_SESSION['gejala_2'] = ($_GET['from'] === 'm2-a') ? 'G04' : '';
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m3-a&from=m3'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m4'>Tidak</a>";
        // YA, gejala[] G08, ke m3-a untuk menentukan apakah G09
        // TIDAK ke m4 untuk menentukan G11
    }
    if($kode=='m3-a'){
        $_SESSION['gejala_3'] = ($_GET['from'] === 'm3') ? 'G08' : '';
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S08'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m3-b'>Tidak</a>";
        // YA, gejala[] G09, menuju solusi S08
        // TIDAK, ke m3-b untuk menentukan G10
    }
    if($kode=='m3-b'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S02'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m4'>Tidak</a>";
        // YA, gejala[] G10, menuju solusi S02
        // TIDAK, ke m4 untuk menentukan G11
    }


    if($kode=='m4'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m4-a'>Ya</a>";
        // YA, gejala[] G11, ke m4-a untuk menentukan apakah G12
        // Kalau gejala[] mengandung G03 atau G04 menuju S01,
        // kalau gejalan[] mengandung G08 menuju S02,
        // dan pilihan TIDAK maka komputer aman
        if($_SESSION['gejala_1'] === 'G03' || $_SESSION['gejala_2'] === 'G04'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S01'>Tidak</a>";
        } else if($_SESSION['gejala_3'] === 'G08'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S02'>Tidak</a>";
        } else {
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=aman'>Tidak</a>";
        }
        
        
    }
    if($kode=='m4-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S06'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m4-b'>Tidak</a>";
        // YA, gejala[] G12, menuju solusi S06.
        // TIDAK, ke m4-b untuk menentukan G13
    }
    if($kode=='m4-b'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S05'>Ya</a>";        
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S06'>Tidak</a>";
        // YA, gejala G13, menuju solusi S05
        // jika jawabannya tidak, dan gejala[] hanya berisi G11 dan G03, atau G11 saja kita paksa
        // untuk memakai kode S06
    }

}

function kesimpulan($solusi){
    include 'koneksi.php';
    if($solusi !== 'AMAN') {
        $sql = "SELECT tb_gejala.gejala as nama_gejala, tb_gejala.kode_gejala as kode_gejala FROM tb_gejala_solusi join tb_gejala on tb_gejala_solusi.gejala = tb_gejala.kode_gejala join tb_solusi on tb_gejala_solusi.solusi = tb_solusi.kode_solusi WHERE solusi='$solusi' AND status='setuju'";
        $data = mysqli_query($connect, $sql);
        $i = 0;
        while ($row = mysqli_fetch_assoc($data)) {

            // echo '<p>-'.$row['gejala'].'</p>';
            // mysqli_query($connect,"INSERT INTO `tb_jawaban_gejala`(`gejala`, `kode_jawaban`) VALUES ('$row[gejala]',')");
            if ($row['kode_gejala'] === 'G01' || $row['kode_gejala'] === 'G02') {

                if ($_SESSION['gejala_awal'] === 'G01') {
                    $rr['msg'][$i] = $rr['data'][$i] = 'Printer Laser Jet';
                } else {
                    $rr['msg'][$i] = $rr['data'][$i] = 'Printer Ink Jet';
                }
            } else {
                $rr['msg'][$i] = $rr['data'][$i] = $row['nama_gejala'];
            }
            //untuk deklarasi folder rr yang bentuknya arry
            // $rr['msg'][$i] = $rr['data'][$i] = $row['nama_gejala'];
            // $rr['data'][$i] = $row['gejala'];
            $i++;
        } 
    } else {
        if ($_SESSION['gejala_awal'] === 'G01') {
            $rr['msg'][0] = $rr['data'][0] = 'Printer Laser Jet';
        } else {
            $rr['msg'][0] = $rr['data'][0] = 'Printer Ink Jet';
        }

        $rr['msg'][1] = $rr['data'][1] = 'TIDAK ADA GEJALA';
    }
    
    
    echo "<br>";

    return $rr; 
}

function solusi($kode){    
    if ($kode=='S01') {
        $solusi = "Lepas cartridge dengan hati-hati untuk mengecek apakah tinta sudah habis atau belum. Setelah itu lakukan pembersihan pada mat head nya dengan menggunakan cairan pembersih tinta.";
        $kk = kesimpulan(strtoupper($kode)); 
        return $kk;       
    }else
    if ($kode=='S02') {
        $solusi = "Membatasi tebal tumpukan kertas sesuai dengan kapasitas yang didukung oleh printer. Sebelum dipasang pada paper try, sebaiknya kertas dikibas-kibaskan terlebih dahulu agar kertas tidak saling menempel";
        $kk = kesimpulan(strtoupper($kode)); 
        return $kk;  
    }else
    if ($kode=='S03') {
        $solusi = "Mengganti tinta, toner atau pita printer dengan yg baru. Jangan lupa untuk memeriksa apakah ada sesuatu yg menghalangi head dengan kertas.";
        $kk = kesimpulan(strtoupper($kode)); 
        return $kk;  
    }else
    if ($kode=='S04') {
        $solusi = "Usaplah drum dengan kain halus untuk menghilangkan benda asing yang menempel atau dengan mengganti drum jika terdapat lubang kecil pada permukaan drum";
        $kk = kesimpulan(strtoupper($kode)); 
        return $kk;  
    }else
    if ($kode=='S05') {
        $solusi = "Pastikan posisi kertas terpasang dengan baik, apabila sudah dilakukan tetapi lampu masih menyala kemungkinan sensor kertas printer rusak. Disarankan untuk mengganti sensor printer yan baru";
        $kk = kesimpulan(strtoupper($kode)); 
        return $kk;  
    }else
    if ($kode=='S06') {
        $solusi = "Periksa apakah pintu printer telah ditutup dengan benar. Periksa catridge, kertas dan cobalah untuk mematikan printer beberapa saat dan kemudian menghidupkan kembali";
        $kk = kesimpulan(strtoupper($kode)); 
        return $kk;  
    }else
    if ($kode=='S07') {
        $solusi = "Pengetesan printer menggunakan print test page pada driver printer.";
        $kk = kesimpulan(strtoupper($kode)); 
        return $kk;  
    }else
    if ($kode=='S08') {
        $solusi = "Pengamplasan dengan hati-hati pada bagian roda penariknya. Bersihkan juga roda penggerak dari kotoran yang ada.kemungkinan lain yang bisa terjadi adalah karena tinta yang hampir habis.";
        $kk = kesimpulan(strtoupper($kode)); 
        return $kk;  
    }
    if($kode=='aman')   {
        $kk = kesimpulan(strtoupper($kode));
        return $kk;
    }
}


?>