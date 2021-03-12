<?php
function homeWork($string,$number)
{
    $len = strlen($string);
    $count = 0;


    $sameletter = $string[0];
    for ($i = 0; $i < $len; $i++) {
        if ($string[$i] == $sameletter) {
            $count++;
            if ($count > $number) {
                $result = str_split('');
               // array_splice($result, $i, 1);
                //implode('', $result);
                //$i--;
            }
        } else {
            $sameletter = $string[$i];
            $count = 1;
        }
    }
    echo $string;
}

homeWork('aab', 1);