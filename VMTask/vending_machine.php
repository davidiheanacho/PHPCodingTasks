<?php
echo "Waiting for money: \n";
$handle = fopen ("php://stdin","r");
$inputcoins = (int)trim(fgets($handle));
fclose($handle);

$coins = [
    '2e' => 200,
    '1e'=> 100,
    '50c' => 50,
    '20c' => 20,
    '10c' => 10,
    '5c' => 5,
    '2c' => 2,
    '1c' => 1,
];


if (!in_array($inputcoins, array_keys($coins))) {
    echo "Cannot accept $inputcoins cents";
    exit(1);
    //die

}
$products = [
    'A' => 95,
    'B' => 126,
    'C' => 233,
];

echo "\nGot {$inputcoins} cents, what do you want to buy?\n\n";



    $keys = implode(' or ', array_keys($products));
    echo "\nType the letter of the product {$keys}\n";

    $handle = fopen("php://stdin", "r");
    $product = (string)trim(fgets($handle));
    fclose($handle);

    echo "\n\n";

    if (!in_array($product, array_keys($products))) {
        echo "Invalid Product";
    } else {
        $cost = $products[$product];
        echo "- {$product} costs {$cost} cents\n";

        $productCost = $products[$product];
        $leftover = $inputcoins - $productCost;

        $output = "You bought {$product} for {$productCost}, your change {$leftover} \n";

        echo $output;
    }



