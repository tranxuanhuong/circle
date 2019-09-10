<?php

include_once "ComparatorCircle.php";
$circle1=new ComparatorCircle("circle1",4);
$circle2=new ComparatorCircle("circle2",5);
$circle3=new ComparatorCircle("circle3",6);

$test=$circle1->compareTo($circle2);

echo $test;
