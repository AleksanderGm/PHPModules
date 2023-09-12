<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="" method="post">
        <label for="fylke_input">Hvilket fylke tilhører du?</label>
        <select name="fylke_input">
            <option value="">Velg Kommune...</option>
            <option value="1">Kristiansand</option>
            <option value="2">Lillesand</option>
            <option value="3">Birkenes</option>
            <option value="4">Harstad</option>
            <option value="5">Kvæfjord</option>
            <option value="6">Tromsø</option>
            <option value="7">Bergen</option>
            <option value="8">Trondheim</option>
            <option value="9">Bodø</option>
            <option value="10">Alta</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>



<?php

if (isset($_POST['submit'])) {
    $value = $_POST['fylke_input'];
    if ($value === "1") {
        echo "Kristiansand tilhører Agder fylke";
    } elseif ($value === "2") {
        echo "Lillesand tilhører fylke";
    } elseif ($value === "3") {
        echo "Birkenes kommune tilhører fylke";
    } elseif ($value === "4") {
        echo "Harstad kommune tilhører fylke";
    } elseif ($value === "5") {
        echo "Kvæfjord kommune tilhører fylke";
    } elseif ($value === "6") {
        echo "Tromsø kommune tilhører fylke";
    } elseif ($value === "7") {
        echo "Bergen kommune tilhører fylke";
    } elseif ($value === "8") {
        echo "Trondheim kommune tilhører fylke";
    } elseif ($value === "9") {
        echo "Bodø kommune tilhører fylke";
    } elseif ($value === "10") {
        echo "Alta kommune tilhører fylke";
    } else {
        echo "Du må velge en kommune.";
    }
}