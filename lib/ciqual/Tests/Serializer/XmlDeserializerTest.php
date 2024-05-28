<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Ciqual\Tests\Serializer;

use DOMDocument;
use WBW\Library\Ciqual\Model\Aliment;
use WBW\Library\Ciqual\Model\Composition;
use WBW\Library\Ciqual\Model\Constituant;
use WBW\Library\Ciqual\Model\GroupeAliments;
use WBW\Library\Ciqual\Model\Source;
use WBW\Library\Ciqual\Serializer\XmlDeserializer;
use WBW\Library\Ciqual\Tests\AbstractTestCase;

/**
 * XML deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Tests\Serializer
 */
class XmlDeserializerTest extends AbstractTestCase {

    /**
     * Test deserializeAliment()
     *
     * @return void
     */
    public function testDeserializeAliment(): void {

        $filename = realpath(__DIR__ . "/../Fixtures/Serializer/XmlDeserializerTest.testDeserializeAliment.xml");
        $content  = XmlDeserializer::xmlEntities($filename, "windows-1252");

        // Set a DOM document mock.
        $document = new DOMDocument();
        $document->loadXML($content);

        $res = XmlDeserializer::deserializeAliment($document->documentElement->childNodes->item(1));
        $this->assertInstanceOf(Aliment::class, $res);

        $this->assertEquals("1000", $res->getCode());
        $this->assertEquals("Pastis", $res->getNomFr());
        $this->assertEquals("Pastis (anise-flavoured spirit)", $res->getNomEng());
        $this->assertEquals("06", $res->getCodeGroupe());
        $this->assertEquals("0603", $res->getCodeSousGroupe());
        $this->assertEquals("060303", $res->getCodeSousSousGroupe());
    }

    /**
     * Test deserializeComposition()
     *
     * @return void
     */
    public function testDeserializeComposition(): void {

        $filename = realpath(__DIR__ . "/../Fixtures/Serializer/XmlDeserializerTest.testDeserializeComposition.xml");
        $content  = XmlDeserializer::xmlEntities($filename, "windows-1252");

        // Set a DOM document mock.
        $document = new DOMDocument();
        $document->loadXML($content);

        $res = XmlDeserializer::deserializeComposition($document->documentElement->childNodes->item(1));
        $this->assertInstanceOf(Composition::class, $res);

        $this->assertEquals("1000", $res->getCodeAliment());
        $this->assertEquals("327", $res->getCodeConstituant());
        $this->assertEquals("1140", $res->getTeneur());
        $this->assertEquals("", $res->getMin());
        $this->assertEquals("", $res->getMax());
        $this->assertEquals("C", $res->getCodeConfiance());
        $this->assertEquals("1", $res->getCodeSource());
    }

    /**
     * Test deserializeConstituant()
     *
     * @return void
     */
    public function testDeserializeConstituant(): void {

        $filename = realpath(__DIR__ . "/../Fixtures/Serializer/XmlDeserializerTest.testDeserializeConstituant.xml");
        $content  = XmlDeserializer::xmlEntities($filename, "windows-1252");

        // Set a DOM document mock.
        $document = new DOMDocument();
        $document->load($filename);

        $res = XmlDeserializer::deserializeConstituant($document->documentElement->childNodes->item(1));
        $this->assertInstanceOf(Constituant::class, $res);

        $this->assertEquals("327", $res->getCode());
        $this->assertEquals("Energie, Règlement UE N° 1169/2011 (kJ/100 g)", $res->getNomFr());
        $this->assertEquals("Energy, Regulation EU No 1169/2011 (kJ/100g)", $res->getNomEng());
    }

    /**
     * Test deserializeGroupeAliments()
     *
     * @return void
     */
    public function testDeserializeGroupeAliments(): void {

        $filename = realpath(__DIR__ . "/../Fixtures/Serializer/XmlDeserializerTest.testDeserializeGroupeAliments.xml");
        $content  = XmlDeserializer::xmlEntities($filename, "windows-1252");

        // Set a DOM document mock.
        $document = new DOMDocument();
        $document->load($filename);

        $res = XmlDeserializer::deserializeGroupeAliments($document->documentElement->childNodes->item(1));
        $this->assertInstanceOf(GroupeAliments::class, $res);

        $this->assertEquals("01", $res->getCode());
        $this->assertEquals("entrées et plats composés", $res->getNomFr());
        $this->assertEquals("starters and dishes", $res->getNomEng());
        $this->assertEquals("0101", $res->getCodeSousGroupe());
        $this->assertEquals("salades composées et crudités", $res->getNomFrSousGroupe());
        $this->assertEquals("mixed salads", $res->getNomEngSousGroupe());
        $this->assertEquals("000000", $res->getCodeSousSousGroupe());
        $this->assertEquals("-", $res->getNomFrSousSousGroupe());
        $this->assertEquals("-", $res->getNomEngSousSousGroupe());
    }

    /**
     * Test deserializeSource()
     *
     * @return void
     */
    public function testDeserializeSource(): void {

        $filename = realpath(__DIR__ . "/../Fixtures/Serializer/XmlDeserializerTest.testDeserializeSource.xml");
        $content  = XmlDeserializer::xmlEntities($filename, "windows-1252");

        // Set a DOM document mock.
        $document = new DOMDocument();
        $document->loadXML($content);

        $res = XmlDeserializer::deserializeSource($document->documentElement->childNodes->item(1));
        $this->assertInstanceOf(Source::class, $res);

        $this->assertEquals("1", $res->getCode());
        $this->assertEquals("Valeur ajustée/calculée/imputée Ciqual", $res->getCitationRef());
    }
}
