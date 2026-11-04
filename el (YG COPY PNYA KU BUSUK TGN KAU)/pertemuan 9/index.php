<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalog product</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>catalog handphone</h1>
        <div class="catalog">
            <?php for ($i=0; $i <40; $i++): ?>
            <div class="card">
                <img src="img/iphone17.jpg" alt="">
                <h3>Iphone 17</h3>
                <p>Rp 24.999.000</p>
            <p>Terjual : 30</p>
            <p>Stock : Ready/Terbatas</p>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</body>
</html>