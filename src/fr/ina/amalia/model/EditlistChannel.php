<?php

namespace fr\ina\amalia\model;

/**
 * Class representing EditlistChannel
 */
class EditlistChannel
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
     * @property \fr\ina\amalia\model\EditlistSegment[] $editlistSegment
     */
    private $editlistSegment = null;

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
     * Adds as editlistSegment
     *
     * @return self
     * @param \fr\ina\amalia\model\EditlistSegment $editlistSegment
     */
    public function addToEditlistSegment(\fr\ina\amalia\model\EditlistSegment $editlistSegment)
    {
        $this->editlistSegment[] = $editlistSegment;
        return $this;
    }

    /**
     * isset editlistSegment
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEditlistSegment($index)
    {
        return isset($this->editlistSegment[$index]);
    }

    /**
     * unset editlistSegment
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEditlistSegment($index)
    {
        unset($this->editlistSegment[$index]);
    }

    /**
     * Gets as editlistSegment
     *
     * @return \fr\ina\amalia\model\EditlistSegment[]
     */
    public function getEditlistSegment()
    {
        return $this->editlistSegment;
    }

    /**
     * Sets a new editlistSegment
     *
     * @param \fr\ina\amalia\model\EditlistSegment[] $editlistSegment
     * @return self
     */
    public function setEditlistSegment(array $editlistSegment)
    {
        $this->editlistSegment = $editlistSegment;
        return $this;
    }


}

