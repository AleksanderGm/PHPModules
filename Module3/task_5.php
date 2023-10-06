
<?php
$startNummer = 1;
$maksNummer = 65;
for ($i = 1; $i <= $maksNummer; $i++){
    

    $gramMedHvete = ($startNummer * 0.035);

    if ($gramMedHvete < 100) {
        echo "<br>Rute nummer $i har: $startNummer hvetekorn ------------- Dette veier $gramMedHvete Gram";

    } else {
        $tonnMedHvete = $gramMedHvete / 1000000;
        echo "<br>Rute nummer $i har: $startNummer hvetekorn ------------- Dette veier $tonnMedHvete Tonn";
    }
    $startNummer *= 2;
}
?>