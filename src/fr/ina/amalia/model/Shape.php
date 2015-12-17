<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Shape
 */
class Shape
{

    /**
     * @property string $t
     */
    private $t = null;

    /**
     * @property \fr\ina\amalia\model\PtType $c
     */
    private $c = null;

    /**
     * @property float $rx
     */
    private $rx = null;

    /**
     * @property float $ry
     */
    private $ry = null;

    /**
     * @property float $o
     */
    private $o = null;

    /**
     * Gets as t
     *
     * @return string
     */
    public function getT()
    {
        return $this->t;
    }

    /**
     * Sets a new t
     *
     * @param string $t
     * @return self
     */
    public function setT($t)
    {
        $this->t = $t;
        return $this;
    }

    /**
     * Gets as c
     *
     * @return \fr\ina\amalia\model\PtType
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * Sets a new c
     *
     * @param \fr\ina\amalia\model\PtType $c
     * @return self
     */
    public function setC(\fr\ina\amalia\model\PtType $c)
    {
        $this->c = $c;
        return $this;
    }

    /**
     * Gets as rx
     *
     * @return float
     */
    public function getRx()
    {
        return $this->rx;
    }

    /**
     * Sets a new rx
     *
     * @param float $rx
     * @return self
     */
    public function setRx($rx)
    {
        $this->rx = $rx;
        return $this;
    }

    /**
     * Gets as ry
     *
     * @return float
     */
    public function getRy()
    {
        return $this->ry;
    }

    /**
     * Sets a new ry
     *
     * @param float $ry
     * @return self
     */
    public function setRy($ry)
    {
        $this->ry = $ry;
        return $this;
    }

    /**
     * Gets as o
     *
     * @return float
     */
    public function getO()
    {
        return $this->o;
    }

    /**
     * Sets a new o
     *
     * @param float $o
     * @return self
     */
    public function setO($o)
    {
        $this->o = $o;
        return $this;
    }


}

