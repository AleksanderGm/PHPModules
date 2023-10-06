<?php
//Kan skrive dette uten å indikere indeks også.
$array = array(
    1 => 0,
    2 => 3,
    3 => 5,
    4 => 7,
    5 => 8,
    6 => 15
);

echo "Array with print_r:\n";
print_r($array);

// Print the array using a loop to display both keys and contents
echo "\nArray with loop:\n";
foreach ($array as $key => $value) {
    echo "<br>Key $key = Value $value\n";
}
?>