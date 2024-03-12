<?php
$a = 1000;
if ($a > 50 && $a < 60) {
    echo "D";
} elseif ($a > 60 && $a < 70) {
    echo "C";
} elseif ($a > 70 && $a < 80) {
    echo "B";
} elseif ($a > 80 && $a <= 100) {
    echo "A";
} else {
    echo "Invalide Result";
}