<?php
function calculateTotal($inputcoins) {
    $sum = 0;

    // Defines the amount of money the machines accepts.
    $coins = [
        '2e' => 200,
        '1e' => 100,
        '50c' => 50,
        '20c' => 20,
        '10c' => 10,
        '5c' => 5,
        '2c' => 2,
        '1c' => 1,
    ];
    $split = explode(" ", $inputcoins);


    foreach ($split as $inputcoins) {
        // Adds the value of coins to total amount & rejects any amount the machine does not accept.
        if (in_array($inputcoins, array_keys($coins))) {
            $sum += $coins[$inputcoins];
        } else {
            throw new Exception("Cannot accept money");
        }

    }

    return $sum;
}