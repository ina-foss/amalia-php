<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Histogram
 */
class Histogram
{

    /**
     * @property integer $nbbins
     */
    private $nbbins = null;

    /**
     * @property integer $posmax
     */
    private $posmax = null;

    /**
     * @property integer $negmax
     */
    private $negmax = null;

    /**
     * @property string $posbins
     */
    private $posbins = null;

    /**
     * @property string $negbins
     */
    private $negbins = null;

    /**
     * Gets as nbbins
     *
     * @return integer
     */
    public function getNbbins()
    {
        return $this->nbbins;
    }

    /**
     * Sets a new nbbins
     *
     * @param integer $nbbins
     * @return self
     */
    public function setNbbins($nbbins)
    {
        $this->nbbins = $nbbins;
        return $this;
    }

    /**
     * Gets as posmax
     *
     * @return integer
     */
    public function getPosmax()
    {
        return $this->posmax;
    }

    /**
     * Sets a new posmax
     *
     * @param integer $posmax
     * @return self
     */
    public function setPosmax($posmax)
    {
        $this->posmax = $posmax;
        return $this;
    }

    /**
     * Gets as negmax
     *
     * @return integer
     */
    public function getNegmax()
    {
        return $this->negmax;
    }

    /**
     * Sets a new negmax
     *
     * @param integer $negmax
     * @return self
     */
    public function setNegmax($negmax)
    {
        $this->negmax = $negmax;
        return $this;
    }

    /**
     * Gets as posbins
     *
     * @return string
     */
    public function getPosbins()
    {
        return $this->posbins;
    }

    /**
     * Sets a new posbins
     *
     * @param string $posbins
     * @return self
     */
    public function setPosbins($posbins)
    {
        $this->posbins = $posbins;
        return $this;
    }

    /**
     * Gets as negbins
     *
     * @return string
     */
    public function getNegbins()
    {
        return $this->negbins;
    }

    /**
     * Sets a new negbins
     *
     * @param string $negbins
     * @return self
     */
    public function setNegbins($negbins)
    {
        $this->negbins = $negbins;
        return $this;
    }


}

