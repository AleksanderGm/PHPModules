<?php
    $Etternavn = "";
    function fullName($firstName, $lastName) {
        $firstName = ucfirst(strtolower($firstName));
        $lastName = ucfirst(strtolower($lastName));
        echo $firstName, " ", $lastName;
    }

    fullName("aleksAnder", "mO");
?>