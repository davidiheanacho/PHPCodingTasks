<?php
require "vendor/autoload.php";
// "2e 1e 50c 20c"
$sum = askMoney();


// Displays total amount of currency separately
$euros = (int)($sum / 100);
$cents = $sum % 100;

echo "Got $euros Euros, and $cents Cents, what do you want to buy";


// Lists available products and costs
$products = [
    'A' => 95,
    'B' => 126,
    'C' => 233,
];

// Product selection display
$keys = implode(' or ', array_keys($products));
echo "\nType the letter of the product {$keys}\n";

$handle = fopen("php://stdin", "r");
$product = (string)trim(fgets($handle));
fclose($handle);

echo "\n\n";

// Rejects product not offered by machine

if (!in_array($product, array_keys($products))) {
    echo "Invalid Product";
} else {
    $cost = $products[$product];
    echo "- {$product} costs {$cost} cents\n";

    while ($sum < $products[$product]) {
        echo "Sorry, not enough money";
        echo "\n";
        $sum += askMoney();
    }

    //Buys product and gives you change
    $productCost = $products[$product];
    $leftover = $sum - $productCost;

    $output = "You bought {$product} for {$productCost}, your change {$leftover} \n";

    echo $output;


}






