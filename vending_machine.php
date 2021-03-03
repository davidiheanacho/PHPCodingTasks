<?php
echo "Waiting for money: \n";
$handle = fopen ("php://stdin","r");
$cents = (int)trim(fgets($handle));
fclose($handle);


if (!in_array($cents, array(1, 2, 5, 10, 20, 50, 100, 200))) {
    echo "Cannot accept $cents cents";
} else {
    $products = [
        'A' => 95,
        'B' => 126,
        'C' => 233,
    ];

    echo "\nGot {$cents} cents, what do you want to buy?\n\n";



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
            $leftover = $cents - $productCost;

            $output = "You bought {$product} for {$productCost}, your change {$leftover} \n";

            echo $output;
        }

    /*foreach ($products as $name => $cost):
        if ($product == $products) {
            echo "- {$name} costs {$cost} cents\n";
            break;
        } elseif ($name !== $products) {
            echo "Invalid product";
            break;
        }
    endforeach; */

        /*switch ($products) {
            case ($products != "A" || $products != "B" || $products != "C"):
                echo "Invalid product" . "\n";
                break;
            default;
                break;
        } */


    }

