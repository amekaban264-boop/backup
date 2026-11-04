<?php
$product = [ 
    ["jam tangan", 150.000, 30, 20],    
    ["books", 20.000, 10, 200],
    ["totebag", 170.000, 20, 20],
    ["jewlry", 200.000, 5, 20],
    ["keychin", 40.000, 150, 20],
];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Product</title>
    <link rel="stylesheet" href="style.css">k
</head>
<body>

    <h1>Data Product</h1>
 
    <table>
        <tr>
            <th>No</th>
            <th>Product</th>
            <th>price</th>
            <th>stock</th>
            <th>sold</th>
        </tr>
<?php for ($x = 0; $x < 5; $x++): ?>
<tr>
    <td>1</td>
    <td><?=$product[$x][0]; ?></td>
    <td><?=$product[$x][1]; ?></td>
    <td><?=$product[$x][2]; ?></td>
    <td><?=$product[$x][3]; ?></td>
</tr>
<?php endfor; ?>

</table>
</body>
</html>