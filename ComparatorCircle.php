<?php
include_once "Comparator.php";
include_once "Radius.php";

class ComparatorCircle extends Radius implements Comparator
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }
    public function compareTo($circleTwo)
    {
        $circleTwoRadius=$circleTwo->getRadius();
        if ($this->getRadius()>$circleTwoRadius){
            return 1;
        }elseif ($this->getRadius()<$circleTwoRadius){
            return -1;
        }else{
            return 0;
        }

    }

}