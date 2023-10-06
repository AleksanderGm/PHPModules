<?php
/*
Kan skrive dette uten å indikere indeks også.
Lager et array, setter index og nøkkel verdier.
*/
$array = array(
    1 => 0,
    2 => 3,
    3 => 5,
    4 => 7,
    5 => 8,
    6 => 15
);

echo "<b>Array skrevet ut med print_r:</b><br>";
print_r($array);

echo "<b><br><br>Array skrevet ut med loop:</b>";
foreach ($array as $index => $key) {
    echo "<br>Index $index = Key $key\n";
}
?>