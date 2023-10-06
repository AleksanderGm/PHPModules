<?php
function manyYears($rente, $saldo, $years)
{
    $renteSats = $rente / 100;
    for ($yearNmbr = 1; $yearNmbr <= $years; $yearNmbr++) {
        $saldo = $saldo + ($saldo * $renteSats);

        echo "Etter $yearNmbr år, er saldoen din: $saldo <br>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="rente">Hva er din rente?</label>
        <input type="text" name="rente">

        <label for="saldo">Hva er din saldo?</label>
        <input type="text" name="saldo">

        <label for="years">Hvor mange år ønsker du å regne ut?</label>
        <input type="text" name="years">

        <input type="submit" value="submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $renteInput = $_POST['rente'];
        $yearsInput = $_POST['years'];
        $saldoInput = $_POST['saldo'];

        manyYears($renteInput, $saldoInput, $yearsInput);
    }
    ?>
</body>

</html>