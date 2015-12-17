<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Metadata
 */
class Metadata
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $label
     */
    private $label = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $rootDirectory
     */
    private $rootDirectory = null;

    /**
     * @property string $enrich
     */
    private $enrich = null;

    /**
     * @property string $algorithm
     */
    private $algorithm = null;

    /**
     * @property string $processor
     */
    private $processor = null;

    /**
     * @property \DateTime $processed
     */
    private $processed = null;

    /**
     * @property integer $version
     */
    private $version = null;

    /**
     * @property \fr\ina\amalia\model\ViewControl $viewControl
     */
    private $viewControl = null;

    /**
     * @property \fr\ina\amalia\model\Data $data
     */
    private $data = null;

    /**
     * @property \fr\ina\amalia\model\Localisation[] $localisation
     */
    private $localisation = null;

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
     * Gets as label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as rootDirectory
     *
     * @return string
     */
    public function getRootDirectory()
    {
        return $this->rootDirectory;
    }

    /**
     * Sets a new rootDirectory
     *
     * @param string $rootDirectory
     * @return self
     */
    public function setRootDirectory($rootDirectory)
    {
        $this->rootDirectory = $rootDirectory;
        return $this;
    }

    /**
     * Gets as enrich
     *
     * @return string
     */
    public function getEnrich()
    {
        return $this->enrich;
    }

    /**
     * Sets a new enrich
     *
     * @param string $enrich
     * @return self
     */
    public function setEnrich($enrich)
    {
        $this->enrich = $enrich;
        return $this;
    }

    /**
     * Gets as algorithm
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets a new algorithm
     *
     * @param string $algorithm
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

    /**
     * Gets as processor
     *
     * @return string
     */
    public function getProcessor()
    {
        return $this->processor;
    }

    /**
     * Sets a new processor
     *
     * @param string $processor
     * @return self
     */
    public function setProcessor($processor)
    {
        $this->processor = $processor;
        return $this;
    }

    /**
     * Gets as processed
     *
     * @return \DateTime
     */
    public function getProcessed()
    {
        return $this->processed;
    }

    /**
     * Sets a new processed
     *
     * @param \DateTime $processed
     * @return self
     */
    public function setProcessed(\DateTime $processed)
    {
        $this->processed = $processed;
        return $this;
    }

    /**
     * Gets as version
     *
     * @return integer
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param integer $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as viewControl
     *
     * @return \fr\ina\amalia\model\ViewControl
     */
    public function getViewControl()
    {
        return $this->viewControl;
    }

    /**
     * Sets a new viewControl
     *
     * @param \fr\ina\amalia\model\ViewControl $viewControl
     * @return self
     */
    public function setViewControl(\fr\ina\amalia\model\ViewControl $viewControl)
    {
        $this->viewControl = $viewControl;
        return $this;
    }

    /**
     * Gets as data
     *
     * @return \fr\ina\amalia\model\Data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @param \fr\ina\amalia\model\Data $data
     * @return self
     */
    public function setData(\fr\ina\amalia\model\Data $data)
    {
        $this->data = $data;
        return $this;
    }

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

