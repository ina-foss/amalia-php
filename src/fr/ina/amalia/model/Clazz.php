<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Clazz
 */
class Clazz
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
     * @property float $score
     */
    private $score = null;

    /**
     * @property string[] $uri
     */
    private $uri = null;

    /**
     * @property \fr\ina\amalia\model\Attribute[] $attribute
     */
    private $attribute = null;

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
     * Gets as score
     *
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * @param float $score
     * @return self
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Adds as uri
     *
     * @return self
     * @param string $uri
     */
    public function addToUri($uri)
    {
        $this->uri[] = $uri;
        return $this;
    }

    /**
     * isset uri
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUri($index)
    {
        return isset($this->uri[$index]);
    }

    /**
     * unset uri
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUri($index)
    {
        unset($this->uri[$index]);
    }

    /**
     * Gets as uri
     *
     * @return string[]
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Sets a new uri
     *
     * @param string $uri
     * @return self
     */
    public function setUri(array $uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Adds as attribute
     *
     * @return self
     * @param \fr\ina\amalia\model\Attribute $attribute
     */
    public function addToAttribute(\fr\ina\amalia\model\Attribute $attribute)
    {
        $this->attribute[] = $attribute;
        return $this;
    }

    /**
     * isset attribute
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAttribute($index)
    {
        return isset($this->attribute[$index]);
    }

    /**
     * unset attribute
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAttribute($index)
    {
        unset($this->attribute[$index]);
    }

    /**
     * Gets as attribute
     *
     * @return \fr\ina\amalia\model\Attribute[]
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Sets a new attribute
     *
     * @param \fr\ina\amalia\model\Attribute[] $attribute
     * @return self
     */
    public function setAttribute(array $attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }


}

