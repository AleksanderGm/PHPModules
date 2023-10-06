<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Guidance Bookings</title>
    
</head>
<body>
    <h1>Guidance Bookings</h1>
    <table>
        <tr>
            <th>Tittel</th>
            <th>Beskrivelse</th>
            <th>Guidance Time</th>
            <th>Place</th>
        </tr>
        <?php
        $guidanceBookings = array(
            array(
                "Tittel" => "Språkkurs Registrering",
                "Beskrivelse" => "Meld deg på våre språkkurs for å forbedre dine språkferdigheter.",
                "Veiledningstid" => "2023-11-18 kl. 16:30",
                "Sted" => "UiA, Bygg 57, Rom 205"
            ),
            array(
                "Tittel" => "Studier i Utlandet Rådgivning",
                "Beskrivelse" => "Utforsk alternativene for å studere i utlandet og internasjonale programmer.",
                "Veiledningstid" => "2023-11-25 kl. 14:30",
                "Sted" => "Studenttjenester, Kontor 203"
            ),
            array(
                "Tittel" => "Førstehjelpskurs",
                "Beskrivelse" => "Lær viktige førstehjelpsteknikker og hvordan du kan redde liv i nødsituasjoner.",
                "Veiledningstid" => "2023-12-20 kl. 10:00",
                "Sted" => "Helse- og Sikkerhetssenteret"
            )
        );

        foreach ($guidanceBookings as $booking) {
            echo "<tr>";
            echo "<td>" . $booking["Tittel"] . "</td>";
            echo "<td>" . $booking["Beskrivelse"] . "</td>";
            echo "<td>" . $booking["Veiledningstid"] . "</td>";
            echo "<td>" . $booking["Sted"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>