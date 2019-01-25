<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-25
 * Time: 14:55
 */

include_once ('Circle.php');
include_once ('Cylinder.php');

$circle1 = new Circle(3 , 'black')."<br>";
echo $circle1;
$cylinder1 = new Cylinder(5,8,'blue');
echo $cylinder1;

?>