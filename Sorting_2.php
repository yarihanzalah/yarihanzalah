<!DOCTYPE html>
<html>
<body>

<?php
$umur = array("Ropianto"=>"45", "Rizky"=>"12", "Ameena"=>"1");
ksort($umur);

foreach($umur as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo"<br>";
}
?>

</body>
</html>