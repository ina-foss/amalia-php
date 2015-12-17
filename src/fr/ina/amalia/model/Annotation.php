<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Annotation
 */
class Annotation
{

    /**
     * @property float $score
     */
    private $score = null;

    /**
     * @property \fr\ina\amalia\model\Subject $subject
     */
    private $subject = null;

    /**
     * @property \fr\ina\amalia\model\Attribute $attribute
     */
    private $attribute = null;

    /**
     * Gets as score
     *
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * @param float $score
     * @return self
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Gets as subject
     *
     * @return \fr\ina\amalia\model\Subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * @param \fr\ina\amalia\model\Subject $subject
     * @return self
     */
    public function setSubject(\fr\ina\amalia\model\Subject $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as attribute
     *
     * @return \fr\ina\amalia\model\Attribute
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Sets a new attribute
     *
     * @param \fr\ina\amalia\model\Attribute $attribute
     * @return self
     */
    public function setAttribute(\fr\ina\amalia\model\Attribute $attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }


}

