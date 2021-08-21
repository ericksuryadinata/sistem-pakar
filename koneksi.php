<?php
$dbhost = 'localhost'; 
$dbuser = 'erick';
$dbpass = 'erick';
$dbname = 'sispak';

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');
