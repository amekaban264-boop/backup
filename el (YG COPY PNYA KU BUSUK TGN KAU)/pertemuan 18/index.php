<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_rpl4";

$db = new PDO ("mysql:host=$host;dbname=$dbname",$username,$password);

function getALLProducts() {
    global $db;
    $stmt = $db->query("SELECT * FROM table_products");
    return $stmt->fetcHALL(PDO::FETCH_ASSOC);
}

$products = getALLProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Data Product</h1>
    <a href= "tambah.php">Tambah Data</a>
    <table border="1" cellpadding="12" cellspacing="0">
        <h1>Data Product</h1>
        <tr>
            <th>id</th>
            <th>nama_product</th>
            <th>harga</th>
            <th>stok</th>
            <th>terjual</th>  
            <th>action</th>  
</th>
        </tr>
    <?php $x = 1; foreach($products as $product): ?>

<tr>
    <td><?php echo $x++; ?></td>
    <td><?php echo $product["nama_product"]; ?></td>
    <td><?php echo $product["harga"]; ?></td>
    <td><?php echo $product["stok"]; ?></td>
    <td><?php echo $product["terjual"]; ?></td>  
    <td>
    <form action=""method ="post">
        <input type= "hidden" name="id" value="<?=$product["id"]; ?>">
        <button name="hapus" type="submit">hapus</button>
    </form>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
