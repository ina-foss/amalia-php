<?php

/**
 * Copyright (c) 2015 Institut National de l'Audiovisuel, INA
 * This file is part of amalia.js
 * amalia.js is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * Redistributions of source code, javascript and css minified versions
 * must retain the above copyright notice, this list of conditions and the following disclaimer.
 * Neither the name of the copyright holder nor the names of its
 * contributors may be used to endorse or promote products derived from
 * this software without specific prior written permission.
 * You should have received a copy of the GNU General Public License
 * along with amalia.js. If not, see <http://www.gnu.org/licenses/>
 *
 * amalia.js is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */

namespace fr\ina\amalia\base;

use fr\ina\amalia\base\LocalisationBlockInterface;
use fr\ina\amalia\model\Localisation;
use fr\ina\amalia\model\Sublocalisations;
use fr\ina\amalia\model\Data;
use fr\ina\amalia\base\DataBlock;

class LocalisationBlock implements LocalisationBlockInterface
{
    /* @var $this Localisation */

    protected $localisation = null;

    public function __construct()
    {
        $this->localisation = new Localisation();
    }


    public function addLocalisationBlock($localisationBlock)
    {
        /* @var $subLocalisation Sublocalisations */
        $subLocalisation = $this->getLocalisation()->getSublocalisations();
        if ($subLocalisation == null) {
            $subLocalisation = new Sublocalisations();
            $this->localisation->setSublocalisations($subLocalisation);
            $subLocalisation->addToLocalisation($localisationBlock->getLocalisation());
        } else {
            $subLocalisation->addToLocalisation($localisationBlock->getLocalisation());
        }

        return $localisationBlock;
    }

    public function addDataBlock($dataBlock)
    {
        $this->localisation->setData($dataBlock->getData());
    }

    public function setId($id)
    {
        $this->localisation->setId($id);
        return $this;
    }

    public function setLabel($label)
    {
        $this->localisation->setLabel($label);
        return $this;
    }

    public function setThumb($thumb)
    {
        $this->localisation->setThumb($thumb);
        return $this;
    }

    public function setChannel($channel)
    {
        $this->localisation->setChannel($channel);
        return $this;
    }

    public function setType($type)
    {
        $this->localisation->setType($type);
        return $this;
    }

    public function setTcin($tcin)
    {
        $this->localisation->setTcin($tcin);
        return $this;
    }

    public function setTcout($tcout)
    {
        $this->localisation->setTcout($tcout);
        return $this;
    }

    public function setTc($tc)
    {
        $this->localisation->setTc($tc);
        return $this;
    }

    public function setTclevel($tclevel)
    {
        $this->localisation->setTclevel($tclevel);
        return $this;
    }

    public function setScore($score)
    {
        $this->localisation->setScore($score);
        return $this;
    }

    public function setData($data)
    {
        $this->localisation->setData($data);
        return $this;
    }


    public function getLocalisation()
    {
        return $this->localisation;
    }

    public function getTcLevel()
    {
        return $this->localisation->getTclevel();
    }

}
