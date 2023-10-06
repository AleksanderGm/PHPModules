<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bruker Registrering</title>
    <style>
        .feil {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    require __DIR__ . '/functions.php';





    $name = $email = $mobile = $password = $confirmPassword = "";
    $nameErr = $emailErr = $mobileErr = $passwordErr = $confirmPasswordErr = "";
    $registrationMessage = "";

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

        // Passord
        if (empty($_POST["password"])) {
            $passwordErr = "Passord er påkrevd";
        } else {
            $password = testInput($_POST["password"]);
        }

        //  Bekreft passord
        if (empty($_POST["confirmPassword"])) {
            $confirmPasswordErr = "Passord bekreftelse er påkrevd";
        } else {
            $confirmPassword = testInput($_POST["confirmPassword"]);
            if ($password !== $confirmPassword) {
                $confirmPasswordErr = "Passordene er ikke identiske";
            }
        }

        if (empty($nameErr) && empty($emailErr) && empty($mobileErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
            $user = array(
                "Name" => $name,
                "Email" => $email,
                "Mobile" => $mobile,
            );

            // Display registration message
            $registrationMessage = "Ny bruker registrert";
        }
    }


    ?>

    <h1>User Registration</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Navn:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <span class="feil"><?php echo $nameErr; ?></span>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>">
        <span class="feil"><?php echo $emailErr; ?></span>
        <br>

        <label for="mobile">Mobil Nummer:</label>
        <input type="tel" id="mobile" name="mobile" value="<?php echo $mobile; ?>">
        <span class="feil"><?php echo $mobileErr; ?></span>
        <br>

        <label for="password">Passord:</label>
        <input type="password" id="password" name="password">
        <span class="feil"><?php echo $passwordErr; ?></span>
        <br>

        <label for="confirmPassword">Bekreft passord</label>
        <input type="password" id="confirmPassword" name="confirmPassword">
        <span class="feil"><?php echo $confirmPasswordErr; ?></span>
        <br>

        <input type="submit" value="Registrer deg">
    </form>

    <?php

if (!empty($registrationMessage)) {
        echo "<h2>$registrationMessage</h2>";
        echo "<h3>Bruker informasjon:</h3>";
        echo "<p>Navn: $user[Name]</p>";
        echo "<p>Email: $user[Email]</p>";
        echo "<p>Mobil: $user[Mobile]</p>";
    }
    ?>
</body>
</html>