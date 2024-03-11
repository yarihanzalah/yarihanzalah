<!DOCTYPE html>
<html>
<body>

<?php
$computers = array("ASUS", "DELL", "APPLE");
sort($computers);

$clength = count($computers);
for($x = 0; $x < $clength; $x++) {
    echo $computers[$x];
    echo "<br>";
}
?>

</body>
</html>