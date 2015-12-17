<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Contents
 */
class Contents
{

    /**
     * @property \fr\ina\amalia\model\Content[] $content
     */
    private $content = null;

    /**
     * Adds as content
     *
     * @return self
     * @param \fr\ina\amalia\model\Content $content
     */
    public function addToContent(\fr\ina\amalia\model\Content $content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * isset content
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContent($index)
    {
        return isset($this->content[$index]);
    }

    /**
     * unset content
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContent($index)
    {
        unset($this->content[$index]);
    }

    /**
     * Gets as content
     *
     * @return \fr\ina\amalia\model\Content[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * @param \fr\ina\amalia\model\Content[] $content
     * @return self
     */
    public function setContent(array $content)
    {
        $this->content = $content;
        return $this;
    }


}

