<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Container
 */
class Container
{

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * @property \fr\ina\amalia\model\Segments $segments
     */
    private $segments = null;

    /**
     * @property \fr\ina\amalia\model\Contents $contents
     */
    private $contents = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as segments
     *
     * @return \fr\ina\amalia\model\Segments
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * Sets a new segments
     *
     * @param \fr\ina\amalia\model\Segments $segments
     * @return self
     */
    public function setSegments(\fr\ina\amalia\model\Segments $segments)
    {
        $this->segments = $segments;
        return $this;
    }

    /**
     * Gets as contents
     *
     * @return \fr\ina\amalia\model\Contents
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Sets a new contents
     *
     * @param \fr\ina\amalia\model\Contents $contents
     * @return self
     */
    public function setContents(\fr\ina\amalia\model\Contents $contents)
    {
        $this->contents = $contents;
        return $this;
    }


}

