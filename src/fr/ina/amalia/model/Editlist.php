<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Editlist
 */
class Editlist
{

    /**
     * @property \fr\ina\amalia\model\EditlistChannel[] $editlistChannel
     */
    private $editlistChannel = null;

    /**
     * Adds as editlistChannel
     *
     * @return self
     * @param \fr\ina\amalia\model\EditlistChannel $editlistChannel
     */
    public function addToEditlistChannel(\fr\ina\amalia\model\EditlistChannel $editlistChannel)
    {
        $this->editlistChannel[] = $editlistChannel;
        return $this;
    }

    /**
     * isset editlistChannel
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEditlistChannel($index)
    {
        return isset($this->editlistChannel[$index]);
    }

    /**
     * unset editlistChannel
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEditlistChannel($index)
    {
        unset($this->editlistChannel[$index]);
    }

    /**
     * Gets as editlistChannel
     *
     * @return \fr\ina\amalia\model\EditlistChannel[]
     */
    public function getEditlistChannel()
    {
        return $this->editlistChannel;
    }

    /**
     * Sets a new editlistChannel
     *
     * @param \fr\ina\amalia\model\EditlistChannel[] $editlistChannel
     * @return self
     */
    public function setEditlistChannel(array $editlistChannel)
    {
        $this->editlistChannel = $editlistChannel;
        return $this;
    }


}

