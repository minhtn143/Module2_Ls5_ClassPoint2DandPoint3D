<?php
include_once "Point2D.php";
include_once "Point3D.php";
$test1 = new Point2D(5.5,6.6);
foreach ($test1->getXY() as $value){
    echo $value."-";
}
echo $test1->toString()."<br><br>";

$test2 = new Point2D(6.777,9.976564);
foreach ($test2->getXY() as $value){
    echo $value."-";
}
echo $test2->toString()."<br><br>";

$test3= new Point3D(6.45,32,5.33);
echo $test3->toString()."<br><br>";
foreach ($test3->getXYZ() as $value){
    echo $value."  ";
}

echo "<br>";
$test4= new Point3D(655,3234.3232,10324);
echo $test4->toString()."<br><br>";
foreach ($test4->getXYZ() as $value){
    echo $value."  ";
}
