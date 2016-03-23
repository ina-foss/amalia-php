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
     * @property \fr\ina\amalia\model\EditlistChannel[] $editlist
     */
    private $editlist = null;

    /**
     * @property \fr\ina\amalia\model\Metadata[] $metadatas
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
     * Adds as editlistChannel
     *
     * @return self
     * @param \fr\ina\amalia\model\EditlistChannel $editlistChannel
     */
    public function addToEditlist(\fr\ina\amalia\model\EditlistChannel $editlistChannel)
    {
        $this->editlist[] = $editlistChannel;
        return $this;
    }

    /**
     * isset editlist
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEditlist($index)
    {
        return isset($this->editlist[$index]);
    }

    /**
     * unset editlist
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEditlist($index)
    {
        unset($this->editlist[$index]);
    }

    /**
     * Gets as editlist
     *
     * @return \fr\ina\amalia\model\EditlistChannel[]
     */
    public function getEditlist()
    {
        return $this->editlist;
    }

    /**
     * Sets a new editlist
     *
     * @param \fr\ina\amalia\model\EditlistChannel[] $editlist
     * @return self
     */
    public function setEditlist(array $editlist)
    {
        $this->editlist = $editlist;
        return $this;
    }

    /**
     * Adds as metadata
     *
     * @return self
     * @param \fr\ina\amalia\model\Metadata $metadata
     */
    public function addToMetadatas(\fr\ina\amalia\model\Metadata $metadata)
    {
        $this->metadatas[] = $metadata;
        return $this;
    }

    /**
     * isset metadatas
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMetadatas($index)
    {
        return isset($this->metadatas[$index]);
    }

    /**
     * unset metadatas
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMetadatas($index)
    {
        unset($this->metadatas[$index]);
    }

    /**
     * Gets as metadatas
     *
     * @return \fr\ina\amalia\model\Metadata[]
     */
    public function getMetadatas()
    {
        return $this->metadatas;
    }

    /**
     * Sets a new metadatas
     *
     * @param \fr\ina\amalia\model\Metadata[] $metadatas
     * @return self
     */
    public function setMetadatas(array $metadatas)
    {
        $this->metadatas = $metadatas;
        return $this;
    }


}

