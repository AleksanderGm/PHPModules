<?php
    require __DIR__ . '/functions.php';


$userProfile = array(
    "Name" => "",
    "Email" => "",
    "Mobile" => "",
);

$name = $email = $mobile = "";
$nameErr = $emailErr = $mobileErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Navn
    if (empty($_POST["name"])) {
        $nameErr = "Navn er påkrevd";
    } else {
        $name = testInput($_POST["name"]);
    }

    // Email
    if (empty($_POST["email"])) {
        $emailErr = "Email er påkrevd";
    } else {
        $email = testInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Feil email format";
        }
    }

    // Mobil mummer
    if (empty($_POST["mobile"])) {
        $mobileErr = "Mobil nummer er påkrevd";
    } else {
        $mobile = testInput($_POST["mobile"]);
        if (!preg_match("/^[0-9]{8}$/", $mobile)) {
            $mobileErr = "Mobil nummer må være 8 sifre";
        }
    }

    if (empty($nameErr) && empty($emailErr) && empty($mobileErr)) {
        if ($name != $userProfile["Name"] || $email != $userProfile["Email"] || $mobile != $userProfile["Mobile"]) {
            $userProfile["Name"] = $name;
            $userProfile["Email"] = $email;
            $userProfile["Mobile"] = $mobile;

            $updateMessage = "Profil oppdatert";
        }
    }
}

// Function to sanitize input
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>User Profile</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name !== "" ? $name : $userProfile["Name"]; ?>">
        <span class="error"><?php echo $nameErr; ?></span>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email !== "" ? $email : $userProfile["Email"]; ?>">
        <span class="error"><?php echo $emailErr; ?></span>
        <br>

        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile" value="<?php echo $mobile !== "" ? $mobile : $userProfile["Mobile"]; ?>">
        <span class="error"><?php echo $mobileErr; ?></span>
        <br>

        <input type="submit" value="Update Profile">
    </form>

    <?php
    if (isset($updateMessage)) {
        echo "<p>$updateMessage</p>";
    }
    ?>

    <h2>Din profil:</h2>
    <p>Navn: <?php echo $userProfile["Name"]; ?></p>
    <p>Email: <?php echo $userProfile["Email"]; ?></p>
    <p>Mobil: <?php echo $userProfile["Mobile"]; ?></p>
</body>
</html>