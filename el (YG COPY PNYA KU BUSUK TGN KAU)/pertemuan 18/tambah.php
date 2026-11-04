<?php

//koneksi db
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_rpl4";

$db = new PDO ("mysql:host=$host;dbname=$dbname",$username,$password);

function simpanProduct(db) {
    $name = $_POST["nama_product"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $terjual = $_POST["terjual"];
    $gambar = $_POST["gambar"];
    $deskripsi = $_POST["deskripsi"];

    $stmt = $db->prepare("INSERT INTO table_products (nama_product, harga, stok, terjual, gambar, deskripsi) VALUES (?,?,?,?,?,?)");
    $stmt->execute([$nama, $harga, $stok, $terjual, $gambar, $deskripsi]);
}

if (isset($_POST{"simpan"})) {
    $simpanProduct = addproduct($db, $_POST);
    echo "
    <script>
    alert('new product added');
    window.location.href = 'index.php';
    </script>
    ";

}
exit();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add product</title>
</head>
<body>
    <h1>add product</h1>

    <form action=""method="post">
    <div class="name">
        <label
</body>
</html>

