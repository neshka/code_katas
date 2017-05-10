<?php

function makeTable($n){
    echo "<table>";
    for ($i=1;$i<=$n;$i++){
        echo "<tr>";
        for ($j=1;$j<=$n;$j++){
            echo "<td>";
            echo $i . " x " . $j . " = " . $i*$j . " ";
            echo "</td>";
        }
        echo "</tr>";
    }
}
echo "</table>";

makeTable(5);

echo "<br>";


$n = 3;
echo '<table>';
for ($i = 1; $i <= $n; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $n; $j++) {
        echo '<td>';
        echo $i . ' x ' . $j . ' = ' . $i*$j . '&nbsp;&nbsp;&nbsp;';
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';