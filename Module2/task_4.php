<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkuler Differanse</title>
</head>

<body>
    <form method="post" action="">
        <label for="diff_tall1"><b>Skriv inn tall 1</label>
        <br>
        <input type="number" name="diff_tall1">
        <br>

        <label for="diff_tall2"><b>Skriv inn tall 2</label>
        <br>
        <input type="number" name="diff_tall2">
        <br>
        <input type="submit" name="submit" value="Kalkuler">
    </form>


    <?php
    function differanse($tall1, $tall2)
    {
        return "differansen er: " . abs($tall1 - $tall2);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $tall1 = $_POST['diff_tall1'];
        $tall2 = $_POST['diff_tall2'];
        if (!empty($tall1) && !empty($tall2)) {
            $resultat = differanse($tall1, $tall2);

            echo "<br>Differansen mellom $tall1 og $tall2 er $resultat";
        } else {
            echo "<br>Vennligst fyll inn begge felt.";
        }
    }

    ?>
</body>

</html>