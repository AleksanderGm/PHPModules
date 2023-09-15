<?php

function randomPassword()
{
    $upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $specialChar = '!"#$%&/()=?';

    $password = '';

    $password .= $upperCase[rand(0, strlen($upperCase) - 1)];
    $password .= $lowerCase[rand(0, strlen($lowerCase) - 1)];
    $password .= $numbers[rand(0, strlen($numbers) - 1)];
    $password .= $specialChar[rand(0, strlen($specialChar) - 1)];

    $remainingLength = 8 - strlen($password); // Calculate the remaining length

    for ($i = 0; $i < $remainingLength; $i++) {
        $characterSet = $lowerCase . $upperCase . $specialChar . $numbers;
        $password .= $characterSet[rand(0, strlen($characterSet) - 1)];
    }

    str_shuffle($password);

    return $password;
}

$randomPassword = randomPassword();

echo "Your password is: " . $randomPassword;
?>