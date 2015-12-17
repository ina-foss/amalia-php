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

namespace fr\ina\amalia\factory;

/**
 *
 */
interface MetadataFactoryInterface
{

    /**
     * In charge to create metadata block
     * @return fr\ina\amalia\base\MetadataBlock
     */
    public static function createMetadataBlock();

    /**
     * In charge to create metadata block with id
     * @param String $id
     * @return fr\ina\amalia\base\MetadataBlock
     */
    public static function createMetadataBlockWithId($id);

    /**
     * In charge to create metadata block with id and type
     * @param String $id
     * @param String $type
     * @return fr\ina\amalia\base\MetadataBlock
     */
    public static function createMetadataBlockIdAndType($id, $type);

    /**
     * In charge to create localisation block
     * @return \fr\ina\amalia\base\LocalisationBlock
     */
    public static function createLocalisationBlock();

    /**
     * In charge to create localisation block with tc
     * @param String $tc Description
     * @return \fr\ina\amalia\base\LocalisationBlock
     */
    public static function createLocalisationBlockTc($tc);

    /**
     * In charge to create localisation block with tcin and tcout
     * @param String $tcin
     * @param String $tcout
     * @return \fr\ina\amalia\base\LocalisationBlock
     */
    public static function createLocalisationBlockTcinAndTcout($tcin, $tcout);

    /**
     * In charge to create synchronized text localisation block
     * @param String $tcin
     * @param String $tcout
     * @param String $text
     * @return \fr\ina\amalia\base\LocalisationBlock
     */
    public static function createSynchronizedTextLocalisationBlock($tcin, $tcout, $text);

    /**
     * In charge to create data block
     * @return \fr\ina\amalia\base\DataBlock
     */
    public static function createDataBlock();

    /**
     * In charge to add histogram in a Datablock
     * @param Int $nbbins
     * @param String $posbins
     * @param String $negbins
     * @param Int $posmax
     * @param Int $negmax
     * @return \fr\ina\amalia\base\DataBlock
     */
    public static function addHistogram($nbbins, $posbins, $negbins, $posmax, $negmax);

    /**
     * Return json serialized string
     * @param MetadataBlock $metadata
     * @return String
     */
    public static function getSerializedJSON($metadata);

    /**
     * Create metadata Block with localisation
     * @param $id
     * @param $type
     * @param $localisation
     * @return mixed
     */
    public static function createMetadataBlockWithLocalisation($id, $type, $localisation);

    /**
     * Deserialize list of metadata
     * @param $json
     * @return mixed
     */
    public static function deserializeListOfMetadatasJson($json);

    /**
     * Deserialize Metadata json
     * @param $json
     * @return mixed
     */
    public static function deserializeMetadataJson($json);
}
