<?php

//0&ndash;39 p &ndash; F
//40&ndash;54 p &ndash; E
//55&ndash;69 p &ndash; D
//70&ndash;84 p &ndash; C
//85&ndash;98 p &ndash; B
//99&ndash;100 p &ndash; A

function which_note($scoring){
    if ($scoring >= 99){
        echo "You've got A note";
    }elseif ($scoring >= 98){
        echo "You've hot B note";
    }elseif ($scoring >= 84){
        echo "You've got C note";
    }elseif ($scoring >= 69){
        echo "You've hot D note";
    }elseif ($scoring >= 54){
        echo "You've got E note";
    }else{
        echo "You've got F note";
    }
}

which_note(100);
echo "<br>";
which_note(31);
echo "<br>";
which_note(67);
echo "<br>";
which_note(88);
echo "<br>";


