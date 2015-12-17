<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Content
 */
class Content
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $duration
     */
    private $duration = null;

    /**
     * @property integer $width
     */
    private $width = null;

    /**
     * @property integer $height
     */
    private $height = null;

    /**
     * @property \fr\ina\amalia\model\Editlist $editlist
     */
    private $editlist = null;

    /**
     * @property \fr\ina\amalia\model\Metadatas $metadatas
     */
    private $metadatas = null;

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
     * Gets as editlist
     *
     * @return \fr\ina\amalia\model\Editlist
     */
    public function getEditlist()
    {
        return $this->editlist;
    }

    /**
     * Sets a new editlist
     *
     * @param \fr\ina\amalia\model\Editlist $editlist
     * @return self
     */
    public function setEditlist(\fr\ina\amalia\model\Editlist $editlist)
    {
        $this->editlist = $editlist;
        return $this;
    }

    /**
     * Gets as metadatas
     *
     * @return \fr\ina\amalia\model\Metadatas
     */
    public function getMetadatas()
    {
        return $this->metadatas;
    }

    /**
     * Sets a new metadatas
     *
     * @param \fr\ina\amalia\model\Metadatas $metadatas
     * @return self
     */
    public function setMetadatas(\fr\ina\amalia\model\Metadatas $metadatas)
    {
        $this->metadatas = $metadatas;
        return $this;
    }


}

