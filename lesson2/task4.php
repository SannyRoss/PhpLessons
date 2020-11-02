<?php
function sum ($a,$b) {
    return ($a+$b);
}
function sub($a,$b) {
    return ($a-$b);
}
function div($a,$b) {
    return ($a/$b);
}
function mul($a,$b) {
    return ($a*$b);
}

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
            case(sum):
                return sum ($arg1, $arg2);
                break;
            case(sub):
                return sub ($arg1, $arg2);
                break;
            case(div):
                return div ($arg1, $arg2);
                break;
            case(mul):
                return mul ($arg1, $arg2);
                break;
    }
}
echo mathOperation(5, 4, sum).'<br>';
echo mathOperation(5, 4, sub).'<br>';
echo mathOperation(5, 4, div).'<br>';
echo mathOperation(5, 4, mul).'<br>';

?>




<?php
//function mathOperation($arg1, $arg2, $operation) {
//    switch ($operation){
//        case (sum):
//            return ($arg1 + $arg2);
//            break;
//        case (sub):
//            return ($arg1 - $arg2);
//            break;
//        case (div):
//            return ($arg1 / $arg2);
//            break;
//        case (mul):
//            return ($arg1 * $arg2);
//            break;
//        default:
//            echo "Что то пошло не так!";
//    }
//}
//$avg = mathOperation(5, 4, div);
//echo $avg;
//?>
