<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="expiryDate">Write expiry date: </label>
        <input type="date" name="expiryDate" placeholder="YYYY-MM-DD">
        <input type="submit" value="Check Date">
    </form>

    <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $expiryDate = $_POST["expiryDate"];
        $currDate = date('Y-m-d');
        echo "Todays date is " . $expiryDate;
        if ($expiryDate > $currDate) {
            echo "<br>Expiry date is exceeded";
        } else {
            echo "<br>You can still apply for this job";
        }

    }


    ?>
</body>

</html>