<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Subject
 */
class Subject
{

    /**
     * @property \fr\ina\amalia\model\Clazz $clazz
     */
    private $clazz = null;

    /**
     * Gets as clazz
     *
     * @return \fr\ina\amalia\model\Clazz
     */
    public function getClazz()
    {
        return $this->clazz;
    }

    /**
     * Sets a new clazz
     *
     * @param \fr\ina\amalia\model\Clazz $clazz
     * @return self
     */
    public function setClazz(\fr\ina\amalia\model\Clazz $clazz)
    {
        $this->clazz = $clazz;
        return $this;
    }


}

