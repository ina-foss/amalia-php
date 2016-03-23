<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Localisation
 */
class Localisation
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $thumb
     */
    private $thumb = null;

    /**
     * @property string $channel
     */
    private $channel = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $tcin
     */
    private $tcin = null;

    /**
     * @property string $tcout
     */
    private $tcout = null;

    /**
     * @property string $tc
     */
    private $tc = null;

    /**
     * @property integer $tclevel
     */
    private $tclevel = null;

    /**
     * @property float $score
     */
    private $score = null;

    /**
     * @property \fr\ina\amalia\model\Shape $shape
     */
    private $shape = null;

    /**
     * @property \fr\ina\amalia\model\Data $data
     */
    private $data = null;

    /**
     * @property \fr\ina\amalia\model\Localisation[] $sublocalisations
     */
    private $sublocalisations = null;

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
     * Gets as label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as thumb
     *
     * @return string
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Sets a new thumb
     *
     * @param string $thumb
     * @return self
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
        return $this;
    }

    /**
     * Gets as channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets a new channel
     *
     * @param string $channel
     * @return self
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
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
     * Gets as tcin
     *
     * @return string
     */
    public function getTcin()
    {
        return $this->tcin;
    }

    /**
     * Sets a new tcin
     *
     * @param string $tcin
     * @return self
     */
    public function setTcin($tcin)
    {
        $this->tcin = $tcin;
        return $this;
    }

    /**
     * Gets as tcout
     *
     * @return string
     */
    public function getTcout()
    {
        return $this->tcout;
    }

    /**
     * Sets a new tcout
     *
     * @param string $tcout
     * @return self
     */
    public function setTcout($tcout)
    {
        $this->tcout = $tcout;
        return $this;
    }

    /**
     * Gets as tc
     *
     * @return string
     */
    public function getTc()
    {
        return $this->tc;
    }

    /**
     * Sets a new tc
     *
     * @param string $tc
     * @return self
     */
    public function setTc($tc)
    {
        $this->tc = $tc;
        return $this;
    }

    /**
     * Gets as tclevel
     *
     * @return integer
     */
    public function getTclevel()
    {
        return $this->tclevel;
    }

    /**
     * Sets a new tclevel
     *
     * @param integer $tclevel
     * @return self
     */
    public function setTclevel($tclevel)
    {
        $this->tclevel = $tclevel;
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
     * Gets as shape
     *
     * @return \fr\ina\amalia\model\Shape
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * Sets a new shape
     *
     * @param \fr\ina\amalia\model\Shape $shape
     * @return self
     */
    public function setShape(\fr\ina\amalia\model\Shape $shape)
    {
        $this->shape = $shape;
        return $this;
    }

    /**
     * Gets as data
     *
     * @return \fr\ina\amalia\model\Data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @param \fr\ina\amalia\model\Data $data
     * @return self
     */
    public function setData(\fr\ina\amalia\model\Data $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Adds as localisation
     *
     * @return self
     * @param \fr\ina\amalia\model\Localisation $localisation
     */
    public function addToSublocalisations(\fr\ina\amalia\model\Localisation $localisation)
    {
        $this->sublocalisations[] = $localisation;
        return $this;
    }

    /**
     * isset sublocalisations
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSublocalisations($index)
    {
        return isset($this->sublocalisations[$index]);
    }

    /**
     * unset sublocalisations
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSublocalisations($index)
    {
        unset($this->sublocalisations[$index]);
    }

    /**
     * Gets as sublocalisations
     *
     * @return \fr\ina\amalia\model\Sublocalisations
     */
    public function getSublocalisations()
    {
        return $this->sublocalisations;
    }

    /**
     * Sets a new sublocalisations
     *
     * @param \fr\ina\amalia\model\Sublocalisations $sublocalisations
     * @return self
     */
    public function setSublocalisations(\fr\ina\amalia\model\Sublocalisations $sublocalisations)
    {
        $this->sublocalisations = $sublocalisations;
        return $this;
    }


}

