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
     * @property \fr\ina\amalia\model\Segment[] $segments
     */
    private $segments = null;

    /**
     * @property \fr\ina\amalia\model\Content[] $contents
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
     * Adds as segment
     *
     * @return self
     * @param \fr\ina\amalia\model\Segment $segment
     */
    public function addToSegments(\fr\ina\amalia\model\Segment $segment)
    {
        $this->segments[] = $segment;
        return $this;
    }

    /**
     * isset segments
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSegments($index)
    {
        return isset($this->segments[$index]);
    }

    /**
     * unset segments
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSegments($index)
    {
        unset($this->segments[$index]);
    }

    /**
     * Gets as segments
     *
     * @return \fr\ina\amalia\model\Segment[]
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * Sets a new segments
     *
     * @param \fr\ina\amalia\model\Segment[] $segments
     * @return self
     */
    public function setSegments(array $segments)
    {
        $this->segments = $segments;
        return $this;
    }

    /**
     * Adds as content
     *
     * @return self
     * @param \fr\ina\amalia\model\Content $content
     */
    public function addToContents(\fr\ina\amalia\model\Content $content)
    {
        $this->contents[] = $content;
        return $this;
    }

    /**
     * isset contents
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContents($index)
    {
        return isset($this->contents[$index]);
    }

    /**
     * unset contents
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContents($index)
    {
        unset($this->contents[$index]);
    }

    /**
     * Gets as contents
     *
     * @return \fr\ina\amalia\model\Content[]
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Sets a new contents
     *
     * @param \fr\ina\amalia\model\Content[] $contents
     * @return self
     */
    public function setContents(array $contents)
    {
        $this->contents = $contents;
        return $this;
    }


}

