<?php
    var_dump($_GET);    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Metode Pengiriman Data Menggunakan Get</h1>

    <ul>
        <li>product : <?php echo $_GET["nama"]; ?></li>
        <li>price : Rp <?php echo $_GET["price"]; ?></li>
        <li>stock :  <?php echo $_GET["stock"]; ?></li>
        <li>sold :  <?php echo $_GET["sold"]; ?></li>
    </ul>   

</body>
</html>