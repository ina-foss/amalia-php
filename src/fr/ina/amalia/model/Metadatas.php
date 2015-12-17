<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Metadatas
 */
class Metadatas
{

    /**
     * @property \fr\ina\amalia\model\Metadata[] $metadata
     */
    private $metadata = null;

    /**
     * Adds as metadata
     *
     * @return self
     * @param \fr\ina\amalia\model\Metadata $metadata
     */
    public function addToMetadata(\fr\ina\amalia\model\Metadata $metadata)
    {
        $this->metadata[] = $metadata;
        return $this;
    }

    /**
     * isset metadata
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMetadata($index)
    {
        return isset($this->metadata[$index]);
    }

    /**
     * unset metadata
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMetadata($index)
    {
        unset($this->metadata[$index]);
    }

    /**
     * Gets as metadata
     *
     * @return \fr\ina\amalia\model\Metadata[]
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Sets a new metadata
     *
     * @param \fr\ina\amalia\model\Metadata[] $metadata
     * @return self
     */
    public function setMetadata(array $metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }


}

