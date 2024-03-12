<?php
$name = $_GET['name'];
// $name = "";
// $name = null;

// if (!empty($name)) {
if ($name != null) {
    echo "name = $name";
}

?>
<a href="getvalue.php?name=chada">Click Link</a>