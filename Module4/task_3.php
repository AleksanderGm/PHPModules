<?php
// Initialize the user profile data
$userProfile = array(
    "Name" => "",
    "Email" => "",
    "Mobile" => "",
);

// Initialize variables for form input and error messages
$name = $email = $mobile = "";
$nameErr = $emailErr = $mobileErr = "";

// Check if the form is submitted
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

    // Update the user profile if there are no validation errors
    if (empty($nameErr) && empty($emailErr) && empty($mobileErr)) {
        // Check if any changes were made
        if ($name != $userProfile["Name"] || $email != $userProfile["Email"] || $mobile != $userProfile["Mobile"]) {
            // Update the user profile
            $userProfile["Name"] = $name;
            $userProfile["Email"] = $email;
            $userProfile["Mobile"] = $mobile;

            // Inform the user that the profile has been updated
            $updateMessage = "Profile updated successfully!";
        }
    }
}

// Function to sanitize input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
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

    <h2>Your Profile:</h2>
    <p>Name: <?php echo $userProfile["Name"]; ?></p>
    <p>Email: <?php echo $userProfile["Email"]; ?></p>
    <p>Mobile: <?php echo $userProfile["Mobile"]; ?></p>
</body>
</html>