<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="mail_input" >Skriv din mail</label>
        <br>
        <input type="text" name="mail_input">
        <input type="submit" value="submit">
    </form>


    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mailInput = $_POST["mail_input"];
            $cleanMail = filter_var($mailInput, FILTER_VALIDATE_EMAIL);

            echo $cleanMail . "<br> <br>";

            echo '<div class ="resultat">';

            if ($cleanMail !== false) {
                echo '<p class="valid">Valid mail </p>';
            } else {
                echo '<p class="invalid">Invalid mail </p>';
            }

    }

    ?>
</body>
</html>