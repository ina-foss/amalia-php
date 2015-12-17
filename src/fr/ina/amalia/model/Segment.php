<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Segment
 */
class Segment
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $mime
     */
    private $mime = null;

    /**
     * @property string $tcin
     */
    private $tcin = null;

    /**
     * @property string $tcout
     */
    private $tcout = null;

    /**
     * @property string $nativeId
     */
    private $nativeId = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $uri
     */
    private $uri = null;

    /**
     * @property \fr\ina\amalia\model\Channels $channels
     */
    private $channels = null;

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
     * Gets as mime
     *
     * @return string
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * Sets a new mime
     *
     * @param string $mime
     * @return self
     */
    public function setMime($mime)
    {
        $this->mime = $mime;
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
     * Gets as nativeId
     *
     * @return string
     */
    public function getNativeId()
    {
        return $this->nativeId;
    }

    /**
     * Sets a new nativeId
     *
     * @param string $nativeId
     * @return self
     */
    public function setNativeId($nativeId)
    {
        $this->nativeId = $nativeId;
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
     * Gets as uri
     *
     * @return string
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
    public function setUri($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Gets as channels
     *
     * @return \fr\ina\amalia\model\Channels
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * Sets a new channels
     *
     * @param \fr\ina\amalia\model\Channels $channels
     * @return self
     */
    public function setChannels(\fr\ina\amalia\model\Channels $channels)
    {
        $this->channels = $channels;
        return $this;
    }


}

