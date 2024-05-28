<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
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
use WBW\Library\Ciqual\Serializer\JsonSerializer;
use WBW\Library\Ciqual\Serializer\SerializerKeys;
use WBW\Library\Ciqual\Tests\AbstractTestCase;

/**
 * JSON serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Tests\Serializer
 */
class JsonSerializerTest extends AbstractTestCase {

    /**
     * Test serializeAliment()
     *
     * @return void
     */
    public function testSerializeAliment(): void {

        $obj = new Aliment();
        $obj->setCode(SerializerKeys::CODE);
        $obj->setNomFr(SerializerKeys::NOM_FR);
        $obj->setNomIndexFr(SerializerKeys::NOM_INDEX_FR);
        $obj->setNomEng(SerializerKeys::NOM_ENG);
        $obj->setCodeGroupe(SerializerKeys::CODE_GROUPE);
        $obj->setCodeSousGroupe(SerializerKeys::CODE_SOUS_GROUPE);
        $obj->setCodeSousSousGroupe(SerializerKeys::CODE_SOUS_SOUS_GROUPE);

        $res = JsonSerializer::serializeAliment($obj);
        $this->assertCount(7, $res);

        $this->assertEquals($obj->getCode(), $res[SerializerKeys::CODE]);
        $this->assertEquals($obj->getNomFr(), $res[SerializerKeys::NOM_FR]);
        $this->assertEquals($obj->getNomIndexFr(), $res[SerializerKeys::NOM_INDEX_FR]);
        $this->assertEquals($obj->getNomEng(), $res[SerializerKeys::NOM_ENG]);
        $this->assertEquals($obj->getCodeGroupe(), $res[SerializerKeys::CODE_GROUPE]);
        $this->assertEquals($obj->getCodeSousGroupe(), $res[SerializerKeys::CODE_SOUS_GROUPE]);
        $this->assertEquals($obj->getCodeSousSousGroupe(), $res[SerializerKeys::CODE_SOUS_SOUS_GROUPE]);
    }

    /**
     * Test serializeComposition()
     *
     * @return void
     */
    public function testSerializeComposition(): void {

        $obj = new Composition();
        $obj->setCodeAliment(SerializerKeys::CODE_ALIMENT);
        $obj->setCodeConstituant(SerializerKeys::CODE_CONSTITUANT);
        $obj->setTeneur(SerializerKeys::TENEUR);
        $obj->setMin(SerializerKeys::MIN);
        $obj->setMax(SerializerKeys::MAX);
        $obj->setCodeConfiance(SerializerKeys::CODE_CONFIANCE);
        $obj->setCodeSource(SerializerKeys::CODE_SOURCE);

        $res = JsonSerializer::serializeComposition($obj);
        $this->assertCount(7, $res);

        $this->assertEquals($obj->getCodeAliment(), $res[SerializerKeys::CODE_ALIMENT]);
        $this->assertEquals($obj->getCodeConstituant(), $res[SerializerKeys::CODE_CONSTITUANT]);
        $this->assertEquals($obj->getTeneur(), $res[SerializerKeys::TENEUR]);
        $this->assertEquals($obj->getMin(), $res[SerializerKeys::MIN]);
        $this->assertEquals($obj->getMax(), $res[SerializerKeys::MAX]);
        $this->assertEquals($obj->getCodeConfiance(), $res[SerializerKeys::CODE_CONFIANCE]);
        $this->assertEquals($obj->getCodeSource(), $res[SerializerKeys::CODE_SOURCE]);
    }

    /**
     * Test serializeConstituant()
     *
     * @return void
     */
    public function testSerializeConstituant(): void {

        $obj = new Constituant();
        $obj->setCode(SerializerKeys::CODE);
        $obj->setNomFr(SerializerKeys::NOM_FR);
        $obj->setNomEng(SerializerKeys::NOM_ENG);

        $res = JsonSerializer::serializeConstituant($obj);
        $this->assertCount(3, $res);

        $this->assertEquals($obj->getCode(), $res[SerializerKeys::CODE]);
        $this->assertEquals($obj->getNomFr(), $res[SerializerKeys::NOM_FR]);
        $this->assertEquals($obj->getNomEng(), $res[SerializerKeys::NOM_ENG]);
    }

    /**
     * Test serializeGroupeAliments()
     *
     * @return void
     */
    public function testSerializeGroupeAliments(): void {

        $obj = new GroupeAliments();
        $obj->setCode("code");
        $obj->setNomFr("nomFr");
        $obj->setNomEng("nomEng");
        $obj->setCodeSousGroupe("codeSousGroupe");
        $obj->setNomFrSousGroupe("nomFrSousGroupe");
        $obj->setNomEngSousGroupe("nomEngSousGroupe");
        $obj->setCodeSousSousGroupe("codeSousSousGroupe");
        $obj->setNomFrSousSousGroupe("nomFrSousSousGroupe");
        $obj->setNomEngSousSousGroupe("nomEngSousSousGroupe");

        $res = JsonSerializer::serializeGroupeAliments($obj);
        $this->assertCount(9, $res);

        $this->assertEquals($obj->getCode(), $res[SerializerKeys::CODE]);
        $this->assertEquals($obj->getNomFr(), $res[SerializerKeys::NOM_FR]);
        $this->assertEquals($obj->getNomEng(), $res[SerializerKeys::NOM_ENG]);
        $this->assertEquals($obj->getCodeSousGroupe(), $res[SerializerKeys::CODE_SOUS_GROUPE]);
        $this->assertEquals($obj->getNomFrSousGroupe(), $res[SerializerKeys::NOM_FR_SOUS_GROUPE]);
        $this->assertEquals($obj->getNomEngSousGroupe(), $res[SerializerKeys::NOM_ENG_SOUS_GROUPE]);
        $this->assertEquals($obj->getCodeSousSousGroupe(), $res[SerializerKeys::CODE_SOUS_SOUS_GROUPE]);
        $this->assertEquals($obj->getNomFrSousSousGroupe(), $res[SerializerKeys::NOM_FR_SOUS_SOUS_GROUPE]);
        $this->assertEquals($obj->getNomEngSousSousGroupe(), $res[SerializerKeys::NOM_ENG_SOUS_SOUS_GROUPE]);
    }

    /**
     * Test serializeSource()
     *
     * @return void
     */
    public function testSerializeSource(): void {

        $obj = new Source();
        $obj->setCode(SerializerKeys::CODE_SOURCE);
        $obj->setCitationRef(SerializerKeys::CITATION_REF);

        $res = JsonSerializer::serializeSource($obj);
        $this->assertCount(2, $res);

        $this->assertEquals($obj->getCode(), $res[SerializerKeys::CODE]);
        $this->assertEquals($obj->getCitationRef(), $res[SerializerKeys::CITATION_REF]);
    }
}
