<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $name = $email = $mobile = $password = $confirmPassword = "";
    $nameErr = $emailErr = $mobileErr = $passwordErr = $confirmPasswordErr = "";
    $registrationMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate name
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        // Validate email
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        // Validate mobile number
        if (empty($_POST["mobile"])) {
            $mobileErr = "Mobile number is required";
        } else {
            $mobile = test_input($_POST["mobile"]);
            if (!preg_match("/^[0-9]{8}$/", $mobile)) {
                $mobileErr = "Mobile number must be 8 digits";
            }
        }

        // Validate password
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
        }

        // Validate confirm password
        if (empty($_POST["confirmPassword"])) {
            $confirmPasswordErr = "Confirm password is required";
        } else {
            $confirmPassword = test_input($_POST["confirmPassword"]);
            if ($password !== $confirmPassword) {
                $confirmPasswordErr = "Passwords do not match";
            }
        }

        // If no validation errors, store the user data and display a registration message
        if (empty($nameErr) && empty($emailErr) && empty($mobileErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
            $user = array(
                "Name" => $name,
                "Email" => $email,
                "Mobile" => $mobile,
            );

            // Display registration message
            $registrationMessage = "New user registered!";
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h1>User Registration</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>
        <br>

        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile" value="<?php echo $mobile; ?>">
        <span class="error"><?php echo $mobileErr; ?></span>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span class="error"><?php echo $passwordErr; ?></span>
        <br>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword">
        <span class="error"><?php echo $confirmPasswordErr; ?></span>
        <br>

        <input type="submit" value="Register">
    </form>

    <?php
    // Display user information if registration was successful
    if (!empty($registrationMessage)) {
        echo "<h2>$registrationMessage</h2>";
        echo "<h3>User Information:</h3>";
        echo "<p>Name: $user[Name]</p>";
        echo "<p>Email: $user[Email]</p>";
        echo "<p>Mobile: $user[Mobile]</p>";
    }
    ?>
</body>
</html>