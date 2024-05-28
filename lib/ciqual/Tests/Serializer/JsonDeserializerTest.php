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

use WBW\Library\Ciqual\Model\Aliment;
use WBW\Library\Ciqual\Model\Composition;
use WBW\Library\Ciqual\Model\Constituant;
use WBW\Library\Ciqual\Model\GroupeAliments;
use WBW\Library\Ciqual\Model\Source;
use WBW\Library\Ciqual\Serializer\JsonDeserializer;
use WBW\Library\Ciqual\Serializer\SerializerKeys;
use WBW\Library\Ciqual\Tests\AbstractTestCase;

/**
 * JSON deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Tests\Serializer
 */
class JsonDeserializerTest extends AbstractTestCase {

    /**
     * Test deserializeAliment()
     *
     * @return void
     */
    public function testDeserializeAliment(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeAliment.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeAliment($data);
        $this->assertInstanceOf(Aliment::class, $res);

        $this->assertEquals(SerializerKeys::CODE, $res->getCode());
        $this->assertEquals(SerializerKeys::NOM_FR, $res->getNomFr());
        $this->assertEquals(SerializerKeys::NOM_INDEX_FR, $res->getNomIndexFr());
        $this->assertEquals(SerializerKeys::NOM_ENG, $res->getNomEng());
        $this->assertEquals(SerializerKeys::CODE_GROUPE, $res->getCodeGroupe());
        $this->assertEquals(SerializerKeys::CODE_SOUS_GROUPE, $res->getCodeSousGroupe());
        $this->assertEquals(SerializerKeys::CODE_SOUS_SOUS_GROUPE, $res->getCodeSousSousGroupe());
    }

    /**
     * Test deserializeComposition()
     *
     * @return void
     */
    public function testDeserializeComposition(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeComposition.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeComposition($data);
        $this->assertInstanceOf(Composition::class, $res);

        $this->assertEquals(SerializerKeys::CODE_ALIMENT, $res->getCodeAliment());
        $this->assertEquals(SerializerKeys::CODE_CONSTITUANT, $res->getCodeConstituant());
        $this->assertEquals(SerializerKeys::TENEUR, $res->getTeneur());
        $this->assertEquals(SerializerKeys::MIN, $res->getMin());
        $this->assertEquals(SerializerKeys::MAX, $res->getMax());
        $this->assertEquals(SerializerKeys::CODE_CONFIANCE, $res->getCodeConfiance());
        $this->assertEquals(SerializerKeys::CODE_SOURCE, $res->getCodeSource());
    }

    /**
     * Test deserializeConstituant()
     *
     * @return void
     */
    public function testDeserializeConstituant(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeConstituant.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeConstituant($data);
        $this->assertInstanceOf(Constituant::class, $res);

        $this->assertEquals(SerializerKeys::CODE, $res->getCode());
        $this->assertEquals(SerializerKeys::NOM_FR, $res->getNomFr());
        $this->assertEquals(SerializerKeys::NOM_ENG, $res->getNomEng());
    }

    /**
     * Test deserializeGroupeAliments()
     *
     * @return void
     */
    public function testDeserializeGroupeAliments(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeGroupeAliments.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeGroupeAliments($data);
        $this->assertInstanceOf(GroupeAliments::class, $res);

        $this->assertEquals(SerializerKeys::CODE, $res->getCode());
        $this->assertEquals(SerializerKeys::NOM_FR, $res->getNomFr());
        $this->assertEquals(SerializerKeys::NOM_ENG, $res->getNomEng());
        $this->assertEquals(SerializerKeys::CODE_SOUS_GROUPE, $res->getCodeSousGroupe());
        $this->assertEquals(SerializerKeys::NOM_FR_SOUS_GROUPE, $res->getNomFrSousGroupe());
        $this->assertEquals(SerializerKeys::NOM_ENG_SOUS_GROUPE, $res->getNomEngSousGroupe());
        $this->assertEquals(SerializerKeys::CODE_SOUS_SOUS_GROUPE, $res->getCodeSousSousGroupe());
        $this->assertEquals(SerializerKeys::NOM_FR_SOUS_SOUS_GROUPE, $res->getNomFrSousSousGroupe());
        $this->assertEquals(SerializerKeys::NOM_ENG_SOUS_SOUS_GROUPE, $res->getNomEngSousSousGroupe());
    }

    /**
     * Test deserializeSource()
     *
     * @return void
     */
    public function testDeserializeSource(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeSource.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeSource($data);
        $this->assertInstanceOf(Source::class, $res);

        $this->assertEquals(SerializerKeys::CODE, $res->getCode());
        $this->assertEquals(SerializerKeys::CITATION_REF, $res->getCitationRef());
    }
}
