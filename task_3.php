<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
<?php
    $alder = 15;
    $navn = "Aleksander";

    echo 
    "<table border = 1 cellspacing = 1 cellpadding = 10>
    <tr>
        <th>Navn</th>
        <th>Alder</th>
    </tr>
    <tr>
        <td>
            $navn
        </td>
        <td>
            $alder
        </td>
    </tr>

    <ol>
    <li>$navn</li>
    <li>$alder</li>
    </ol>

    <ul>
        <li>$navn</li>
        <li>$alder</li>
    </ul>

    <p>
        $navn
        is
        $alder
        years old
    </p>";


    
?>

</body>
</html>
