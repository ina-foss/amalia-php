<?php

namespace fr\ina\amalia\model;

/**
 * Class representing PtType
 *
 *
 * XSD Type: ptType
 */
class PtType
{

    /**
     * @property float $x
     */
    private $x = null;

    /**
     * @property float $y
     */
    private $y = null;

    /**
     * Gets as x
     *
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Sets a new x
     *
     * @param float $x
     * @return self
     */
    public function setX($x)
    {
        $this->x = $x;
        return $this;
    }

    /**
     * Gets as y
     *
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Sets a new y
     *
     * @param float $y
     * @return self
     */
    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }


}

