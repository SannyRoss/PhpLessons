
<?php
function TheTimeIsNow ($hour, $min) {
    
    if ($hour == 1 || $hour == 21) {
        $hours = "час";
    } elseif (($hour >= 2 && $hour <= 4) || ($hour >=22 && $hour <=24)) {
        $hours = "часа";
    } elseif ($hour >= 5 && $hour <= 20) {
        $hours = "часов";
    }
    if (($min % 10) == 1) {
        $minute = "минута";
    } elseif (($min % 10) >= 2 && ($min % 10) <= 4){
        $minute = "минуты";
    } elseif ($hour >= 10 && $hour <= 20) {
        $minute = "минут";
    } else {
        $minute = "минут";
    }  
echo $hour ." " .$hours ." "  .$min ." " .$minute;
 }

echo TheTimeIsNow (date ("H"), date ("i") )


//$hour = date ("H");
//$min = date ("i");

?>