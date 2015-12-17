<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Channel
 */
class Channel
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $num
     */
    private $num = null;

    /**
     * @property string $codec
     */
    private $codec = null;

    /**
     * @property integer $width
     */
    private $width = null;

    /**
     * @property integer $height
     */
    private $height = null;

    /**
     * @property float $fps
     */
    private $fps = null;

    /**
     * @property string $duration
     */
    private $duration = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as num
     *
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Sets a new num
     *
     * @param string $num
     * @return self
     */
    public function setNum($num)
    {
        $this->num = $num;
        return $this;
    }

    /**
     * Gets as codec
     *
     * @return string
     */
    public function getCodec()
    {
        return $this->codec;
    }

    /**
     * Sets a new codec
     *
     * @param string $codec
     * @return self
     */
    public function setCodec($codec)
    {
        $this->codec = $codec;
        return $this;
    }

    /**
     * Gets as width
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param integer $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param integer $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as fps
     *
     * @return float
     */
    public function getFps()
    {
        return $this->fps;
    }

    /**
     * Sets a new fps
     *
     * @param float $fps
     * @return self
     */
    public function setFps($fps)
    {
        $this->fps = $fps;
        return $this;
    }

    /**
     * Gets as duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param string $duration
     * @return self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }


}

