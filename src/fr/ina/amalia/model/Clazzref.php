<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Clazzref
 */
class Clazzref
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $referentialId
     */
    private $referentialId = null;

    /**
     * @property float $score
     */
    private $score = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as referentialId
     *
     * @return string
     */
    public function getReferentialId()
    {
        return $this->referentialId;
    }

    /**
     * Sets a new referentialId
     *
     * @param string $referentialId
     * @return self
     */
    public function setReferentialId($referentialId)
    {
        $this->referentialId = $referentialId;
        return $this;
    }

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


}

