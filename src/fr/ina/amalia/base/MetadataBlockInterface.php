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


interface MetadataBlockInterface
{

    public function setId($id);

    public function setType($type);

    public function setRootLocalisationBlock($localisationBlock);

    public function addToRootLocalisationBlock($localisationBlock);

    public function getDataBlock();

    public function getRootLocalisationBlock();

    public function getTcLevel();

    public function getType();

    public function getMetadata();

    public function getLocalisationBlock();
}
