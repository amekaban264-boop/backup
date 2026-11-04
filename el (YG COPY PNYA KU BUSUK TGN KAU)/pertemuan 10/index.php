<?php
    $siswa = [
                ["ame kaban", "rekayasa perangkat lunak", "smkn 1 tapur"],
                ["dolar", "rekayasa perangkat lunak", "smkn 1 tapur"],
                ["snoopy", "rekayasa perangkat lunak", "smkn 1 tapur"],
                ["cila", "rekayasa perangkat lunak", "smkn 1 tapur"],
                ["lisa", "rekayasa perangkat lunak", "smkn 1 tapur"],
             ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($siswa as $s) : ?>
    <ul>
        <li>Nama : <?= $s[0]; ?></li>
         <li>Jurusan : <?= $s[1]; ?></li>
          <li>Sekolah : <?= $s[2]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>