<?php
// for loop
for ($i = 1; $i <= 5; $i++) {
    echo "i = $i<br/>";
}

$arr = [1, 3, 5, 7, 9, 11, 'One', 'iTV'];
$count = count($arr);

for ($i = 0; $i < $count; $i++) {
    echo "$arr[$i]<br/>";
}
// อ่านค่า แล้วเก็บไว้ที่ item
foreach ($arr as $item) {
    echo "$item<br/>";
}

$a = 10;
while ($a < 100) {
    echo "a = $a <br/>";
    $a += 10;
}
$user = "";

do {
    echo "USER = $user";

    $user .= "x";
} while (strlen($user) > 10);
