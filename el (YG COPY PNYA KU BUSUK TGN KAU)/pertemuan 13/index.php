<?php
$products = [ 
    ["name" => "Vinyl", "price" => 480000, "stock" => 1129, "sold" => 200,"img" =>"radio.jpg"],

    ["name" => "YSL Glasses", "price" => 12000000, "stock" => 15, "sold" => 200,"img" =>"glasses.jpg"],

    ["name" => "Guitar Electrik", "price" => 200000, "stock" => 20, "sold" => 20,"img" =>"gitar.jpg"],

    ["name" => "F1 Jacket", "price" => 500000, "stock" => 100, "sold" => 95,"img" =>"jacket.jpg"],

    ["name" => "Keychain", "price" => 70000, "stock" => 150, "sold" => 55,"img" =>"keychain.jpg"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Catalog Product</h1>
        <div class="catalog">


            <?php $x = 1; foreach($products as $product): ?>
                <div class ="card">
                    <img src="img/<?php echo $product["img"]; ?>" alt="product">
                    <h3><?php echo $product["name"]; ?></h3>
                    <p> Rp. <?php echo $product["price"]; ?></h3></p>
                    <p>Sold : <?php echo $product["sold"]; ?></h3> </p>
                    <p>Stock : <?php echo $product["stock"]; ?></h3></p>
                    <a href>Detail product</a>
                </div>
            <?php endforeach; ?>
        </div> 
    </div>
</body>
</html>
