<?php

    function fullName($firstName, $lastName) {
        $cleanFirstName = ucfirst(strtolower($firstName));
        $cleanLastName = ucfirst(strtolower($lastName));

        $lengthOfFirstName = strlen($firstName);
        $lengthOfLastName = strlen($lastName);
        $totalNameLength = $lengthOfLastName + $lengthOfFirstName;
        
        echo $cleanFirstName, " ", $cleanLastName . "<br>" . "Navnet inneholder $totalNameLength bokstaver";
    }

    fullName("aleksAnder", "mO");
?>