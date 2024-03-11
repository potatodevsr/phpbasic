<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$a = 5;
$b = 10;
?>
<div><?php echo $a + $b; ?></div>
<div><?php echo $a - $b; ?></div>
<div><?php echo $a * $b; ?></div>
<div><?php echo $a / $b; ?></div>
<div><?php echo $a % $b; ?></div>
<div>
    <?php
    echo $a++;
    echo $a;
    ?>
</div>
<div>
    <?php
    echo ++$a;
    echo $a;
    ?>
</div>