<?php

namespace fr\ina\amalia\model;

/**
 * Class representing ViewControl
 */
class ViewControl
{

    /**
     * @property string $action
     */
    private $action = null;

    /**
     * @property string $color
     */
    private $color = null;

    /**
     * @property string $shape
     */
    private $shape = null;

    /**
     * @property integer $parseLevel
     */
    private $parseLevel = null;

    /**
     * Gets as action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets a new color
     *
     * @param string $color
     * @return self
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Gets as shape
     *
     * @return string
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * Sets a new shape
     *
     * @param string $shape
     * @return self
     */
    public function setShape($shape)
    {
        $this->shape = $shape;
        return $this;
    }

    /**
     * Gets as parseLevel
     *
     * @return integer
     */
    public function getParseLevel()
    {
        return $this->parseLevel;
    }

    /**
     * Sets a new parseLevel
     *
     * @param integer $parseLevel
     * @return self
     */
    public function setParseLevel($parseLevel)
    {
        $this->parseLevel = $parseLevel;
        return $this;
    }


}

