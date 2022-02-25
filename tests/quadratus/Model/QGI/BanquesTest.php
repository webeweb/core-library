<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\Banques;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Banques test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class BanquesTest extends AbstractTestCase {

    /**
     * Tests setBic()
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new Banques();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Tests setCodeBanque()
     *
     * @return void
     */
    public function testSetCodeBanque(): void {

        $obj = new Banques();

        $obj->setCodeBanque("codeBanque");
        $this->assertEquals("codeBanque", $obj->getCodeBanque());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Banques();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new Banques();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests setEdiTdfc()
     *
     * @return void
     */
    public function testSetEdiTdfc(): void {

        $obj = new Banques();

        $obj->setEdiTdfc(true);
        $this->assertEquals(true, $obj->getEdiTdfc());
    }

    /**
     * Tests setIban()
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new Banques();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Tests setIdCarteAppelEnv()
     *
     * @return void
     */
    public function testSetIdCarteAppelEnv(): void {

        $obj = new Banques();

        $obj->setIdCarteAppelEnv("idCarteAppelEnv");
        $this->assertEquals("idCarteAppelEnv", $obj->getIdCarteAppelEnv());
    }

    /**
     * Tests setIdCarteAppelEnv2()
     *
     * @return void
     */
    public function testSetIdCarteAppelEnv2(): void {

        $obj = new Banques();

        $obj->setIdCarteAppelEnv2("idCarteAppelEnv2");
        $this->assertEquals("idCarteAppelEnv2", $obj->getIdCarteAppelEnv2());
    }

    /**
     * Tests setIdCarteAppelEnv3()
     *
     * @return void
     */
    public function testSetIdCarteAppelEnv3(): void {

        $obj = new Banques();

        $obj->setIdCarteAppelEnv3("idCarteAppelEnv3");
        $this->assertEquals("idCarteAppelEnv3", $obj->getIdCarteAppelEnv3());
    }

    /**
     * Tests setIdCarteAppelRec()
     *
     * @return void
     */
    public function testSetIdCarteAppelRec(): void {

        $obj = new Banques();

        $obj->setIdCarteAppelRec("idCarteAppelRec");
        $this->assertEquals("idCarteAppelRec", $obj->getIdCarteAppelRec());
    }

    /**
     * Tests setIsBanqueFact()
     *
     * @return void
     */
    public function testSetIsBanqueFact(): void {

        $obj = new Banques();

        $obj->setIsBanqueFact(true);
        $this->assertEquals(true, $obj->getIsBanqueFact());
    }

    /**
     * Tests setMandatDateDebutEtebac()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMandatDateDebutEtebac(): void {

        // Set a Date/time mock.
        $mandatDateDebutEtebac = new DateTime("2018-09-10");

        $obj = new Banques();

        $obj->setMandatDateDebutEtebac($mandatDateDebutEtebac);
        $this->assertSame($mandatDateDebutEtebac, $obj->getMandatDateDebutEtebac());
    }

    /**
     * Tests setMandatDureeEtebac()
     *
     * @return void
     */
    public function testSetMandatDureeEtebac(): void {

        $obj = new Banques();

        $obj->setMandatDureeEtebac(10);
        $this->assertEquals(10, $obj->getMandatDureeEtebac());
    }

    /**
     * Tests setMandatPieceJointeEtebac()
     *
     * @return void
     */
    public function testSetMandatPieceJointeEtebac(): void {

        $obj = new Banques();

        $obj->setMandatPieceJointeEtebac("mandatPieceJointeEtebac");
        $this->assertEquals("mandatPieceJointeEtebac", $obj->getMandatPieceJointeEtebac());
    }

    /**
     * Tests setNbPrelevements()
     *
     * @return void
     */
    public function testSetNbPrelevements(): void {

        $obj = new Banques();

        $obj->setNbPrelevements(10);
        $this->assertEquals(10, $obj->getNbPrelevements());
    }

    /**
     * Tests setNomInt()
     *
     * @return void
     */
    public function testSetNomInt(): void {

        $obj = new Banques();

        $obj->setNomInt("nomInt");
        $this->assertEquals("nomInt", $obj->getNomInt());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Banques();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Banques();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests setSepa()
     *
     * @return void
     */
    public function testSetSepa(): void {

        $obj = new Banques();

        $obj->setSepa(true);
        $this->assertEquals(true, $obj->getSepa());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new Banques();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new Banques();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Banques();

        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getCodeBanque());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getEdiTdfc());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIdCarteAppelEnv());
        $this->assertNull($obj->getIdCarteAppelEnv2());
        $this->assertNull($obj->getIdCarteAppelEnv3());
        $this->assertNull($obj->getIdCarteAppelRec());
        $this->assertNull($obj->getIsBanqueFact());
        $this->assertNull($obj->getMandatDateDebutEtebac());
        $this->assertNull($obj->getMandatDureeEtebac());
        $this->assertNull($obj->getMandatPieceJointeEtebac());
        $this->assertNull($obj->getNbPrelevements());
        $this->assertNull($obj->getNomInt());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getSepa());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getUniqId());
    }
}
