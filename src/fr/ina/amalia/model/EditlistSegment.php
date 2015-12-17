<?php

namespace fr\ina\amalia\model;

/**
 * Class representing EditlistSegment
 */
class EditlistSegment
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $pos
     */
    private $pos = null;

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
     * Gets as pos
     *
     * @return string
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Sets a new pos
     *
     * @param string $pos
     * @return self
     */
    public function setPos($pos)
    {
        $this->pos = $pos;
        return $this;
    }


}

