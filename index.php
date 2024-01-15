<?php
    require_once __DIR__ . "/Product.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    for($i=0; $i<sizeof($products); $i++){
        var_dump($products[$i]);
    }
    ?>
</body>
</html>