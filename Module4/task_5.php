<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Navn:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="subject">Subjekt:</label>
        <input type="text" id="subject" name="subject" required>
        <br>

        <label for="message">Melding:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        <br>

        <input type="submit" value="Send Melding">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        echo "<h2>Melding Mottat</h2>";
        echo "<p><strong>Navn:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Tittel:</strong> $subject</p>";
        echo "<p><strong>Melding:</strong> $message</p>";
    }
    ?>
</body>
</html>