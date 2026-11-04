<?php
$products = [ 
    ["name" => "Acai Bowl", "price" => 250000, "stock" => 1129, "sold" => 200,"img" =>"acai.jpg"],

    ["name" => "Coffee Bland", "price" => 240000, "stock" => 15, "sold" => 200,"img" =>"coffee.jpg"],

    ["name" => "Dubai Chewy ", "price" => 290000, "stock" => 20, "sold" => 20,"img" =>"dubai.jpg"],

    ["name" => "Matcha", "price" => 50000, "stock" => 100, "sold" => 95,"img" =>"matcha.jpg"],

    ["name" => "Pasta Bolognese", "price" => 70000, "stock" => 150, "sold" => 55,"img" =>"pasta.jpg"],

    ["name" => "Pizza", "price" => 170000, "stock" => 150, "sold" => 55,"img" =>"pizza2.jpg"],

    ["name" => "Ramen", "price" => 55000, "stock" => 150, "sold" => 55,"img" =>"ramen bowl.jpg"],

    ["name" => "Waffle ", "price" => 70000, "stock" => 150, "sold" => 55,"img" =>"waffle.jpg"],

    ["name" => "Steak", "price" => 170000, "stock" => 150, "sold" => 55,"img" =>"steak.jpg"],

    ["name" => "Sashimi", "price" => 230000, "stock" => 150, "sold" => 55,"img" =>"sasimi.jpg"],

    ["name" => "Mie Goreng", "price" => 28000, "stock" => 150, "sold" => 55,"img" =>"mie.jpg"],

    ["name" => "Lemontang", "price" => 27000, "stock" => 150, "sold" => 55,"img" =>"lemon.jpg"],

    ["name" => "Kiwi's", "price" => 17000, "stock" => 150, "sold" => 55,"img" =>"seger.jpg"],

    ["name" => "Teachi", "price" => 16000, "stock" => 150, "sold" => 55,"img" =>"tea.jpg"],

    ["name" => "Bluepear", "price" => 22000, "stock" => 150, "sold" => 55,"img" =>"blue.jpg"],

    ["name" => "Graped", "price" => 17000, "stock" => 150, "sold" => 55,"img" =>"anggur.jpg"],

    ["name" => "Sandpeach", "price" => 35000, "stock" => 150, "sold" => 55,"img" =>"sandwitch.jpg"],

    ["name" => "Hot Chocco", "price" => 45000, "stock" => 150, "sold" => 55,"img" =>"hot.jpg"],

    ["name" => "Pottatoes", "price" => 68000, "stock" => 150, "sold" => 55,"img" =>"potato.jpg"],

    ["name" => "Cocacola", "price" => 17000, "stock" => 150, "sold" => 55,"img" =>"coca.jpg"],

    ["name" => "Ccoko", "price" => 17000, "stock" => 150, "sold" => 55,"img" =>"churos.jpg"],

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Our Signature Menu</h1>
        <div class="catalog">


            <?php $x = 1; foreach($products as $product): ?>
                <div class ="card">
                    <img src="img/<?php echo $product["img"]; ?>" alt="product">
                    <h3><?php echo $product["name"]; ?></h3>
                    <p> Rp. <?php echo $product["price"]; ?></h3></p>
                    <p>Sold : <?php echo $product["sold"]; ?></h3> </p>
                    <p>Stock : <?php echo $product["stock"]; ?></h3></p>
                    <button href>Submit</button>
                </div>
            <?php endforeach; ?>
        </div> 
    </div>
</body>
</html>