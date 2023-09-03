<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Display errors inneholder <b>local value: On</b>, og <b>Master Value: On</b></p>
    <p>Document_Root er: <b>C:/xampp/htdocs</b></p>
    <p>
        phpinfo brukes fordi alle systemer er satt opp forskjellig.
        phpinfo gir mye nyttig informasjon, for eksempel om du har display errors på,
        hva dokument rooten er som er oppgaven her.

        Den viser annen nyttig informasjon som er nyttig, som compilator valg, PHP extensions, hva slags operativsystem som brukes.
        Den viser også sensitiv informasjon om serveren og pcen, så burde ikke sette denne informasjonen på en offentlig server.
    </p>
<?php
    phpinfo()
?>

</body>
</html>
