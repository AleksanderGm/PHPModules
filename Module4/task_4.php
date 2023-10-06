<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guidance Bookings</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Guidance Bookings</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Guidance Time</th>
            <th>Place</th>
        </tr>
        <?php
        $guidanceBookings = array(
            array(
                "Title" => "Career Counseling",
                "Description" => "Get expert advice on your career path and future opportunities.",
                "Guidance Time" => "2023-11-20 10:00 AM",
                "Place" => "Career Center, Room 101",
            ),
            array(
                "Title" => "Study Abroad Consultation",
                "Description" => "Explore options for studying abroad and international programs.",
                "Guidance Time" => "2023-11-25 2:30 PM",
                "Place" => "Student Services, Office 203",
            ),
            array(
                "Title" => "Resume Workshop",
                "Description" => "Learn how to create an impressive resume and land your dream job.",
                "Guidance Time" => "2023-12-05 3:00 PM",
                "Place" => "Library Meeting Room",
            )
        );

        foreach ($guidanceBookings as $booking) {
            echo "<tr>";
            echo "<td>" . $booking["Title"] . "</td>";
            echo "<td>" . $booking["Description"] . "</td>";
            echo "<td>" . $booking["Guidance Time"] . "</td>";
            echo "<td>" . $booking["Place"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>