<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-25
 * Time: 14:09
 */

class Circle
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->color = $color;
        $this->radius = $radius;

    }

    function setRadius($radius)
    {
        $this->radius = $radius;
    }

    function getRadius()
    {
        return $this->radius;
    }

    function setColor($color)
    {
        $this->color = $color;
    }
    function getColor()
    {
        return $this->color;
    }

    function calculateArea()
    {
        return pi() * $this->radius ** 2;
    }
    public function __toString()
    {
        return "color: ".$this->getColor().", radius: ".$this->getRadius().", dien tich: ".$this->calculateArea();
    }

}

?>