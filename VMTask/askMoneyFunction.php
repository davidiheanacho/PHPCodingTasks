<?php
function askMoney()
{
    echo "Waiting for money: \n";
    $handle = fopen("php://stdin", "r");
    $inputcoins = strtolower(trim(fgets($handle)));
    fclose($handle);

    try {
        return calculateTotal($inputcoins);
    } catch (Exception $e) {
        echo $e->getMessage();
        die(1);
    }
}