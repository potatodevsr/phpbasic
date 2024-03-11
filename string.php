<?php
$str = "Hello PHP Programing Language";

// echo strlen($str); //นับจำนวน มีกี่ตัวอักษร
// echo "<br />";

// echo strpos($str, "red"); //หาตำแหน่งที่มีคำว่า red
// echo strpos($str, "Hel"); //หาตำแหน่งที่มีคำว่า Hel
// echo strpos($str, "Pro"); //หาตำแหน่งที่มีคำว่า Pro

echo substr($str, 10, 5); //แยก string ออกมา ตำแหน่งที่ 10  แยกออกมา 5 ตัวอักษร
$arr = explode(" ", $str); //explode กระจายให้เป็น Arr
var_dump($arr);

$arr = ['Hello', 'PHP', '', 'js'];
$str = implode(' ', $arr);
echo $str;

$a = 10;
$b = 5;
$c = "Hello";

$output = "$a$b$c";
echo "<br />";
echo $output;
