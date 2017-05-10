<?php

$month_array = array( "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December");

echo "<select name=\"day\">";
$i = 1;
while ( $i <= 31 ) {
    echo "<option value=".$i.">".$i."</option>";
    $i++;
}
echo "</select>";

echo "<select name=\"month\">";
$i = 0;
while ( $i <= 11 ) {
    echo "<option value=".$i.">".$month_array[$i]."</option>";
    $i++;
}
echo "</select>";

echo "<select name=\"year\">";
$i = 1900;
while ( $i <= 2007 ) {
    echo "<option value=".$i.">".$i."</option>";
    $i++;
}
echo "</select>";

?>