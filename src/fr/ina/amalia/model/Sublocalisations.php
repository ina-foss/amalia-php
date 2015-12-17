<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Sublocalisations
 */
class Sublocalisations
{

    /**
     * @property \fr\ina\amalia\model\Localisation[] $localisation
     */
    private $localisation = null;

    /**
     * Adds as localisation
     *
     * @return self
     * @param \fr\ina\amalia\model\Localisation $localisation
     */
    public function addToLocalisation(\fr\ina\amalia\model\Localisation $localisation)
    {
        $this->localisation[] = $localisation;
        return $this;
    }

    /**
     * isset localisation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocalisation($index)
    {
        return isset($this->localisation[$index]);
    }

    /**
     * unset localisation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocalisation($index)
    {
        unset($this->localisation[$index]);
    }

    /**
     * Gets as localisation
     *
     * @return \fr\ina\amalia\model\Localisation[]
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Sets a new localisation
     *
     * @param \fr\ina\amalia\model\Localisation[] $localisation
     * @return self
     */
    public function setLocalisation(array $localisation)
    {
        $this->localisation = $localisation;
        return $this;
    }


}

