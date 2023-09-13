
<?php
$startNummer = 1;
$maksNummer = 64;
for ($i = 0; $i <= $maksNummer; $i++){
    $startNummer *= 2;

    $gramMedHvete = ($startNummer * 0.035);

    if ($gramMedHvete < 100) {
        echo "<br>Rute nummer $i har: $startNummer hvetekorn ------------- Dette veier $gramMedHvete Gram";
    } else {
        $tonnMedHvete = $gramMedHvete / 1000000;
        echo "<br>Rute nummer $i har: $startNummer hvetekorn ------------- Dette veier $tonnMedHvete Tonn";
    }
}
?>