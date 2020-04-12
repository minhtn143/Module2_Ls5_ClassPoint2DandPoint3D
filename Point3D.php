<?php

include_once "Point2D.php";

class Point3D extends Point2D
{
    protected $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getXYZ()
    {
        return [$this->getX(),$this->getY(),$this->getZ()];
    }

    public function toString()
    {
        return "(".$this->getX().", ".$this->getY().", ".$this->getZ().")";
    }
}