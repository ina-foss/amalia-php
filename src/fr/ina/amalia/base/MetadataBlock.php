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

use fr\ina\amalia\model\Metadata;
use fr\ina\amalia\base\DataBlock;
use fr\ina\amalia\base\LocalisationBlock;
use fr\ina\amalia\base\MetadataBlockInterface;

class MetadataBlock implements MetadataBlockInterface
{


    protected $metadata = null;

    protected $localisationBlock = null;

    public function __construct($_metadata = null)
    {
        if ($_metadata === null) {
            $this->metadata = new Metadata();
        } else {
            $this->metadata = $_metadata;
        }
    }

    public function getId()
    {
        return $this->metadata->getId();
    }

    public function setId($id)
    {
        $this->metadata->setId($id);
        return $this;
    }

    public function setType($type)
    {
        $this->metadata->setType($type);
        return $this;
    }

    public function setRootLocalisationBlock($_localisationBlock)
    {
        $this->addToRootLocalisationBlock($_localisationBlock);
        $this->localisationBlock = $_localisationBlock;
        return $_localisationBlock;
    }

    public function addLocalisationBlock($_localisationBlock)
    {
        $this->getRootLocalisationBlock()->addLocalisationBlock($_localisationBlock);
        return $_localisationBlock;
    }

    public function addToRootLocalisationBlock($_localisationBlock)
    {
        if ($this->localisationBlock == null) {
            $this->localisationBlock = new LocalisationBlock();
        }
        $this->localisationBlock->setTclevel(0);
        $this->metadata->addToLocalisation($_localisationBlock->getLocalisation());
        return $_localisationBlock;
    }


    public function getDataBlock()
    {
        if ($this->metadata->getData() == null) {
            $this->metadata->setData(new Data());
        }
        return new DataBlock($this->metadata->getData());
    }

    public function getRootLocalisationBlock()
    {
        return $this->localisationBlock;
    }

    public function getTcLevel()
    {
        if ($this->metadata->getLocalisation() == null) {
            return 0;
        } else {
            return $this->metadata->getLocalisation()->getTclevel();
        }
    }

    public function getType()
    {
        return $this->metadata->getType();
    }

    public function getMetadata()
    {
        return $this->metadata;
    }

    public function getLocalisationBlock()
    {
        return $this->localisationBlock;
    }

}
