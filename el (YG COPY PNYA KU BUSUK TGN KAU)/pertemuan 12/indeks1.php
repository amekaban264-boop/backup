<?php
$products = [ 
    ["name" => "jam tangan", "price" => 150.000, "stock" => 30, "sold" => 20],    
    ["name" => "books", "price" => 20.000, "stock" => 10, "sold" => 200],
    ["name" => "totebag", "price" => 170.000, "stock" => 20, "sold" => 20],
    ["name" => "jewlry", "price" => 200.000, "stock" => 5, "sold" => 20],
    ["name" => "keychin", "price" => 40.000, "stock" => 150, "sold" => 20],
];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Data Product</h1>
 
    <table>
        <tr>
            <th>No</th>
            <th>Product</th>
            <th>price</th>
            <th>stock</th>
            <th>sold<    
</th>
        </tr>
    <?php $x = 1; foreach($products as $product): ?>

<tr>
    <td><?php echo $x++; ?></td>
    <td><?php echo $product["name"]; ?></td>
    <td><?php echo $product["price"]; ?></td>
    <td><?php echo $product["stock"]; ?></td>
    <td><?php echo $product["sold"]; ?></td>  
<?php endforeach; ?>

</table>
</body>
</html>