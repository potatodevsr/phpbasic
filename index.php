<?php

// echo คำสั่งแสดงผล 
$a = 10;
$b = 10 + $a;
$c = "Hello $a";
$d = "Hi" . $a;
// การต่อสตริงด้วยเครื่องหมาย .
// ประกาศตัวแปร a มีค่าเป็น 10
?>

<div>
    <?php echo $a; ?>
</div>
<div>
    <?php echo $b; ?>
</div>
<div>
    <?php echo $c; ?>
</div>
<div>
    <?= $c; ?>
</div>
<div style="background-color: blue; color:azure">
    <?= $d; ?>
</div>