<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Channels
 */
class Channels
{

    /**
     * @property \fr\ina\amalia\model\Channel[] $channel
     */
    private $channel = null;

    /**
     * Adds as channel
     *
     * @return self
     * @param \fr\ina\amalia\model\Channel $channel
     */
    public function addToChannel(\fr\ina\amalia\model\Channel $channel)
    {
        $this->channel[] = $channel;
        return $this;
    }

    /**
     * isset channel
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetChannel($index)
    {
        return isset($this->channel[$index]);
    }

    /**
     * unset channel
     *
     * @param scalar $index
     * @return void
     */
    public function unsetChannel($index)
    {
        unset($this->channel[$index]);
    }

    /**
     * Gets as channel
     *
     * @return \fr\ina\amalia\model\Channel[]
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets a new channel
     *
     * @param \fr\ina\amalia\model\Channel[] $channel
     * @return self
     */
    public function setChannel(array $channel)
    {
        $this->channel = $channel;
        return $this;
    }


}

