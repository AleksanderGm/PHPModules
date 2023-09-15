<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="user_input"><b>Skriv inn ditt etternavn</b></label>
        <br>
        <input type="text" name="user_input">
        <input type="submit" value="submit">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userInput = $_POST["user_input"];
        $cleanInput = strip_tags($userInput);

        echo "<p> Du har skrevet: " . $cleanInput . "</p>";
    }
?>
</body>
</html>