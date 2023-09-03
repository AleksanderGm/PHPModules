<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    function calculator(){
        $tall1 = 5;
        $tall2 = 3;
        $sum = $tall1 + $tall2;

        $avgNmbr = $sum / 2;

        echo "Summen av $tall1 og $tall2 er $sum 
        <br><br> 
        Gjennomsnittet av $tall1 og $tall2 er $avgNmbr";

    }

    calculator()
?>

<br><br><br>

<a href="index.php">Tilbake</a>

</body>
</html>