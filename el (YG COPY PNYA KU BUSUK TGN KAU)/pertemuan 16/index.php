<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_rpl4";

$db = new PDO ("mysql:$host;$dbname",$username,$password);
if($db) {
    echo "koneksi kedatabase berhasil";
}
?>