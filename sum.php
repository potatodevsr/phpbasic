<?php
$sum = 0;
$arr = [1, 3, 5, 7, 9, 11, 13, 80];

foreach ($arr as $item) {
    $sum += $item;
}

echo "sum = $sum";
