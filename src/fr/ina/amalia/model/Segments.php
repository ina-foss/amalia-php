<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Segments
 */
class Segments
{

    /**
     * @property \fr\ina\amalia\model\Segment[] $segment
     */
    private $segment = null;

    /**
     * Adds as segment
     *
     * @return self
     * @param \fr\ina\amalia\model\Segment $segment
     */
    public function addToSegment(\fr\ina\amalia\model\Segment $segment)
    {
        $this->segment[] = $segment;
        return $this;
    }

    /**
     * isset segment
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSegment($index)
    {
        return isset($this->segment[$index]);
    }

    /**
     * unset segment
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSegment($index)
    {
        unset($this->segment[$index]);
    }

    /**
     * Gets as segment
     *
     * @return \fr\ina\amalia\model\Segment[]
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Sets a new segment
     *
     * @param \fr\ina\amalia\model\Segment[] $segment
     * @return self
     */
    public function setSegment(array $segment)
    {
        $this->segment = $segment;
        return $this;
    }


}

