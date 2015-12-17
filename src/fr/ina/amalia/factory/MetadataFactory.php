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

use fr\ina\amalia\base\DataBlock;
use fr\ina\amalia\base\MetadataBlock;
use fr\ina\amalia\base\LocalisationBlock;
use JMS\Serializer\SerializerBuilder;

/**
 * Metadata Factory
 */
class MetadataFactory implements MetadataFactoryInterface
{

    /**
     * {@inheritdoc}
     */
    public static function createMetadataBlock()
    {
        return new MetadataBlock();
    }

    /**
     * {@inheritdoc}
     */
    public static function createMetadataBlockWithId($id)
    {
        return MetadataFactory::createMetadataBlock()->setId($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function createMetadataBlockIdAndType($id, $type)
    {
        return MetadataFactory::createMetadataBlockWithId($id)->setType($type);
    }

    /**
     * {@inheritdoc}
     */
    public static function createMetadataBlockWithLocalisation($id, $type, $localisation)
    {
        /** @var MetadataBlock $metadataBlock */
        $metadataBlock = MetadataFactory::createMetadataBlockIdAndType($id, $type);
        $metadataBlock->setRootLocalisationBlock($localisation);
        return $metadataBlock;
    }

    /**
     * {@inheritdoc}
     */
    public static function createLocalisationBlock()
    {
        return new LocalisationBlock();
    }

    /**
     * {@inheritdoc}
     */
    public static function createLocalisationBlockTc($tc)
    {
        return MetadataFactory::createLocalisationBlock()->setTc($tc);
    }

    /**
     * {@inheritdoc}
     */
    public static function createLocalisationBlockTcinAndTcout($tcin, $tcout)
    {
        return MetadataFactory::createLocalisationBlock()->setTcin($tcin)->setTcout($tcout);
    }

    /**
     * {@inheritdoc}
     */
    public static function createSynchronizedTextLocalisationBlock($tcin, $tcout, $text)
    {
        return MetadataFactory::createLocalisationBlock()->setTcin($tcin)->setTcout($tcout)->setSynchronizedText($text);
    }

    /**
     * {@inheritdoc}
     */
    public static function createDataBlock()
    {
        return new DataBlock();
    }

    /**
     * {@inheritdoc}
     */
    public static function addHistogram($nbbins, $posbins, $negbins, $posmax, $negmax)
    {
        return MetadataFactory::createDataBlock()->addHistogram($nbbins, $posbins, $negbins, $posmax, $negmax);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSerializedJSON($metadata)
    {
        return MetadataFactory::getSerializer()->serialize($metadata->getMetadata(), 'json');
    }

    /**
     * {@inheritdoc}
     */
    public static function deserializeListOfMetadatasJson($json)
    {
        return MetadataFactory::getSerializer()->deserialize($json, 'fr\ina\amalia\model\Metadatas', 'json');
    }

    /**
     * {@inheritdoc}
     */
    public static function deserializeMetadataJson($json)
    {
        return MetadataFactory::getSerializer()->deserialize($json, 'fr\ina\amalia\model\Metadata', 'json');
    }

    /**
     * Return serializer
     * @return SerializerBuilder
     */
    private static function getSerializer()
    {
        return SerializerBuilder::create()
            ->addMetadataDir(__DIR__ . '/../model/', 'fr\ina\amalia\model')
            ->setDebug(false)
            ->build();
    }

}
