<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog product</title>
    <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h1>Catalog Doll</h1>
     <div class="catalog">
        <?php for ($i=0; $i <30; $i++): ?>
        <div class="card">
        <img src="img/soopy.jpg" alt="">
        <h3>Snoopy's</h3>
        <p>Rp 170.000</p>
        <p>Terjual : 300</p>
        <p>Stock : 100</p>
      </div>
     <?php endfor; ?>
  <div> 
</body>
</html>
