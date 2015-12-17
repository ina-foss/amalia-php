<?php

namespace fr\ina\amalia\model;

/**
 * Class representing Data
 */
class Data
{

    /**
     * @property float $score
     */
    private $score = null;

    /**
     * @property \fr\ina\amalia\model\Clazz[] $clazz
     */
    private $clazz = null;

    /**
     * @property \fr\ina\amalia\model\Clazzref[] $clazzref
     */
    private $clazzref = null;

    /**
     * @property \fr\ina\amalia\model\Annotation[] $annotation
     */
    private $annotation = null;

    /**
     * @property \fr\ina\amalia\model\Attribute[] $attribute
     */
    private $attribute = null;

    /**
     * @property \fr\ina\amalia\model\Histogram[] $histogram
     */
    private $histogram = null;

    /**
     * @property string[] $text
     */
    private $text = null;

    /**
     * @property string[] $formated
     */
    private $formated = null;

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
     * Adds as clazz
     *
     * @return self
     * @param \fr\ina\amalia\model\Clazz $clazz
     */
    public function addToClazz(\fr\ina\amalia\model\Clazz $clazz)
    {
        $this->clazz[] = $clazz;
        return $this;
    }

    /**
     * isset clazz
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetClazz($index)
    {
        return isset($this->clazz[$index]);
    }

    /**
     * unset clazz
     *
     * @param scalar $index
     * @return void
     */
    public function unsetClazz($index)
    {
        unset($this->clazz[$index]);
    }

    /**
     * Gets as clazz
     *
     * @return \fr\ina\amalia\model\Clazz[]
     */
    public function getClazz()
    {
        return $this->clazz;
    }

    /**
     * Sets a new clazz
     *
     * @param \fr\ina\amalia\model\Clazz[] $clazz
     * @return self
     */
    public function setClazz(array $clazz)
    {
        $this->clazz = $clazz;
        return $this;
    }

    /**
     * Adds as clazzref
     *
     * @return self
     * @param \fr\ina\amalia\model\Clazzref $clazzref
     */
    public function addToClazzref(\fr\ina\amalia\model\Clazzref $clazzref)
    {
        $this->clazzref[] = $clazzref;
        return $this;
    }

    /**
     * isset clazzref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetClazzref($index)
    {
        return isset($this->clazzref[$index]);
    }

    /**
     * unset clazzref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetClazzref($index)
    {
        unset($this->clazzref[$index]);
    }

    /**
     * Gets as clazzref
     *
     * @return \fr\ina\amalia\model\Clazzref[]
     */
    public function getClazzref()
    {
        return $this->clazzref;
    }

    /**
     * Sets a new clazzref
     *
     * @param \fr\ina\amalia\model\Clazzref[] $clazzref
     * @return self
     */
    public function setClazzref(array $clazzref)
    {
        $this->clazzref = $clazzref;
        return $this;
    }

    /**
     * Adds as annotation
     *
     * @return self
     * @param \fr\ina\amalia\model\Annotation $annotation
     */
    public function addToAnnotation(\fr\ina\amalia\model\Annotation $annotation)
    {
        $this->annotation[] = $annotation;
        return $this;
    }

    /**
     * isset annotation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnnotation($index)
    {
        return isset($this->annotation[$index]);
    }

    /**
     * unset annotation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnnotation($index)
    {
        unset($this->annotation[$index]);
    }

    /**
     * Gets as annotation
     *
     * @return \fr\ina\amalia\model\Annotation[]
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * Sets a new annotation
     *
     * @param \fr\ina\amalia\model\Annotation[] $annotation
     * @return self
     */
    public function setAnnotation(array $annotation)
    {
        $this->annotation = $annotation;
        return $this;
    }

    /**
     * Adds as attribute
     *
     * @return self
     * @param \fr\ina\amalia\model\Attribute $attribute
     */
    public function addToAttribute(\fr\ina\amalia\model\Attribute $attribute)
    {
        $this->attribute[] = $attribute;
        return $this;
    }

    /**
     * isset attribute
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAttribute($index)
    {
        return isset($this->attribute[$index]);
    }

    /**
     * unset attribute
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAttribute($index)
    {
        unset($this->attribute[$index]);
    }

    /**
     * Gets as attribute
     *
     * @return \fr\ina\amalia\model\Attribute[]
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Sets a new attribute
     *
     * @param \fr\ina\amalia\model\Attribute[] $attribute
     * @return self
     */
    public function setAttribute(array $attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }

    /**
     * Adds as histogram
     *
     * @return self
     * @param \fr\ina\amalia\model\Histogram $histogram
     */
    public function addToHistogram(\fr\ina\amalia\model\Histogram $histogram)
    {
        $this->histogram[] = $histogram;
        return $this;
    }

    /**
     * isset histogram
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHistogram($index)
    {
        return isset($this->histogram[$index]);
    }

    /**
     * unset histogram
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHistogram($index)
    {
        unset($this->histogram[$index]);
    }

    /**
     * Gets as histogram
     *
     * @return \fr\ina\amalia\model\Histogram[]
     */
    public function getHistogram()
    {
        return $this->histogram;
    }

    /**
     * Sets a new histogram
     *
     * @param \fr\ina\amalia\model\Histogram[] $histogram
     * @return self
     */
    public function setHistogram(array $histogram)
    {
        $this->histogram = $histogram;
        return $this;
    }

    /**
     * Adds as text
     *
     * @return self
     * @param string $text
     */
    public function addToText($text)
    {
        $this->text[] = $text;
        return $this;
    }

    /**
     * isset text
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetText($index)
    {
        return isset($this->text[$index]);
    }

    /**
     * unset text
     *
     * @param scalar $index
     * @return void
     */
    public function unsetText($index)
    {
        unset($this->text[$index]);
    }

    /**
     * Gets as text
     *
     * @return string[]
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * @param string[] $text
     * @return self
     */
    public function setText(array $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as formated
     *
     * @return self
     * @param string $formated
     */
    public function addToFormated($formated)
    {
        $this->formated[] = $formated;
        return $this;
    }

    /**
     * isset formated
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormated($index)
    {
        return isset($this->formated[$index]);
    }

    /**
     * unset formated
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormated($index)
    {
        unset($this->formated[$index]);
    }

    /**
     * Gets as formated
     *
     * @return string[]
     */
    public function getFormated()
    {
        return $this->formated;
    }

    /**
     * Sets a new formated
     *
     * @param string[] $formated
     * @return self
     */
    public function setFormated(array $formated)
    {
        $this->formated = $formated;
        return $this;
    }


}

