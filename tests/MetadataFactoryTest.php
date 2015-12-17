<?php

require('vendor/autoload.php');

use fr\ina\amalia\factory\MetadataFactory;
use fr\ina\amalia\base\MetadataBlock;

class MetadataFactoryTest extends PHPUnit_Framework_TestCase
{

    public function testSimpleBlock()
    {
        $id = 'amalia-simple';
        $type = 'test';
        $metadataBloc = MetadataFactory::createMetadataBlockIdAndType($id, $type);
        $serializedJSON = MetadataFactory::getSerializedJSON($metadataBloc);
        $this->assertEquals(get_class($metadataBloc), 'fr\ina\amalia\base\MetadataBlock');
        $this->isJson($serializedJSON);
        $this->assertJsonStringEqualsJsonFile(
            'tests/data/amalia-simple-block.json', $serializedJSON);
    }

    public function testSimpleBlockWithLocalisationTc()
    {
        $id = 'amalia-simple';
        $type = 'test';
        $tc = "00:05:00.0000";
        $localisation = MetadataFactory::createLocalisationBlockTc($tc);
        $localisation->setTclevel(0);
        $localisation->setType($type);

        $metadataBloc = MetadataFactory::createMetadataBlockWithLocalisation($id, $type, $localisation);
        $serializedJSON = MetadataFactory::getSerializedJSON($metadataBloc);
        $this->assertEquals(get_class($metadataBloc), 'fr\ina\amalia\base\MetadataBlock');
        $this->isJson($serializedJSON);
        $this->assertJsonStringEqualsJsonFile(
            'tests/data/amalia-simple-localisation-tc.json', $serializedJSON);
    }

    public function testSimpleBlockWithLocalisationTcinTcout()
    {
        $id = 'amalia-simple';
        $type = 'test';
        $tcin = "00:00:00.0000";
        $tcout = "00:01:00.0000";
        $localisation = MetadataFactory::createLocalisationBlockTcinAndTcout($tcin, $tcout);
        $localisation->setTclevel(0);
        $localisation->setType($type);
        $metadataBloc = MetadataFactory::createMetadataBlockWithLocalisation($id, $type, $localisation);
        $serializedJSON = MetadataFactory::getSerializedJSON($metadataBloc);
        $this->assertEquals(get_class($metadataBloc), 'fr\ina\amalia\base\MetadataBlock');
        $this->isJson($serializedJSON);
        $this->assertJsonStringEqualsJsonFile(
            'tests/data/amalia-simple-localisation.json', $serializedJSON);
    }

    public function testSimpleBlockWithLocalisationAndSublocalisation()
    {
        $id = 'amalia-simple';
        $type = 'test';
        $tcin = "00:00:00.0000";
        $tcout = "00:01:00.0000";
        $label = "Test label !";
        $localisation = MetadataFactory::createLocalisationBlockTcinAndTcout($tcin, $tcout);
        $localisation->setTclevel(0);
        $localisation->setType($type);
        /* @var $metadataBloc fr\ina\amalia\base\MetadataBlock */
        $metadataBloc = MetadataFactory::createMetadataBlockWithLocalisation($id, $type, $localisation);

        $subLocalisationBlock = MetadataFactory::createLocalisationBlockTc("00:00:30.0000");
        $subLocalisationBlock->setLabel($label);
        $subLocalisationBlock->setTclevel(1);

        $localisation->addLocalisationBlock($subLocalisationBlock);
        $subLocalisationBlock1 = MetadataFactory::createLocalisationBlockTc("00:00:40.0000");
        $subLocalisationBlock1->setLabel($label);
        $subLocalisationBlock1->setTclevel(1);
        $localisation->addLocalisationBlock($subLocalisationBlock1);

        //JSON
        $serializedJSON = MetadataFactory::getSerializedJSON($metadataBloc);
        $this->assertEquals(get_class($metadataBloc), 'fr\ina\amalia\base\MetadataBlock');
        $this->isJson($serializedJSON);
        $this->assertJsonStringEqualsJsonFile(
            'tests/data/amalia-simple-localisation-sublocalisation.json', $serializedJSON);
    }

    public function testSimpleBlockWithLocalisationAndData()
    {
        $id = 'amalia-simple';
        $type = 'test';
        $tcin = "00:00:00.0000";
        $tcout = "00:01:00.0000";
        $label = "Test label !";
        $localisation = MetadataFactory::createLocalisationBlockTcinAndTcout($tcin, $tcout);
        $localisation->setTclevel(0);
        $localisation->setType($type);
        /* @var $metadataBloc fr\ina\amalia\base\MetadataBlock */
        $metadataBloc = MetadataFactory::createMetadataBlockWithLocalisation($id, $type, $localisation);

        $histogram = MetadataFactory::addHistogram(2048, "", "", "", "");
        $localisation->addDataBlock($histogram);

        //JSON
        $serializedJSON = MetadataFactory::getSerializedJSON($metadataBloc);
        $this->assertEquals(get_class($metadataBloc), 'fr\ina\amalia\base\MetadataBlock');
        $this->isJson($serializedJSON);
        $this->assertJsonStringEqualsJsonFile(
            'tests/data/amalia-simple-localisation-data.json', $serializedJSON);
    }

    /**
     * Fonction en charge de deserialization
     */
    public function testDeserializeJsonFile()
    {
        $toDeserializeJson = file_get_contents('tests/data/amalia-simple-localisation-sublocalisation.json');
        /** @var \fr\ina\amalia\model\Metadata $metadata */
        $metadata = MetadataFactory::deserializeMetadataJson($toDeserializeJson);
        $this->assertEquals(get_class($metadata), 'fr\ina\amalia\model\Metadata');
        $this->assertEquals($metadata->getId(), 'amalia-simple');
        $this->assertEquals($metadata->getType(), 'test');
        /** @var array<\fr\ina\amalia\model\Localisation> $localisations */
        $localisations = $metadata->getLocalisation();
        $this->assertEquals(count($localisations), 1);
        if (count($localisations) > 0) {
            /** @var \fr\ina\amalia\model\Localisation $loc */
            $loc = $localisations[0];
            $this->assertEquals($loc->getTcin(), '00:00:00.0000');
            $this->assertEquals($loc->getTcout(), '00:01:00.0000');
        }
    }

}
