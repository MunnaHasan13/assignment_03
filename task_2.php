<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];

function isOdd($numbers) {
    foreach(range(1,10,2) as $oddNumber) {
        echo $oddNumber."\n";
    }
}
isOdd($numbers);
