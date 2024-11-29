<?php
function calculateArea($num1,$num2){
    $area = $num1 * $num2;
    return $area;
}
echo("<b>The area of a rectangle with a width of 4 and 2 is ".calculateArea(4,2)."</b>");
?>