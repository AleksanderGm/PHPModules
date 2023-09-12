<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $maksNummer = 10;

    for ($i = 0; $i < $maksNummer; $i++) {

        ob_end_flush();
        ob_flush();

        sleep(1);

        echo "<br>Current count: $i";

        flush();

    }
    ?>

</body>

</html>