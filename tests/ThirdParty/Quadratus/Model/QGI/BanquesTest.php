<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Banques;

/**
 * Banques model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class BanquesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Banques();

        $this->assertNull($obj->getBIC());
        $this->assertNull($obj->getCodeBanque());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getEdiTdfc());
        $this->assertNull($obj->getIBAN());
        $this->assertNull($obj->getIDCarteAppelEnv());
        $this->assertNull($obj->getIDCarteAppelEnv2());
        $this->assertNull($obj->getIDCarteAppelEnv3());
        $this->assertNull($obj->getIDCarteAppelRec());
        $this->assertNull($obj->getIsBanqueFact());
        $this->assertNull($obj->getMandatDateDebutETEBAC());
        $this->assertNull($obj->getMandatDureeETEBAC());
        $this->assertNull($obj->getMandatPieceJointeETEBAC());
        $this->assertNull($obj->getNbPrelevements());
        $this->assertNull($obj->getNomInt());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getRIB());
        $this->assertNull($obj->getSepa());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getUniqID());
    }

    /**
     * Tests the setBIC() method.
     *
     * @return void
     */
    public function testSetBIC() {

        $obj = new Banques();

        $obj->setBIC("bIC");
        $this->assertEquals("bIC", $obj->getBIC());
    }

    /**
     * Tests the setCodeBanque() method.
     *
     * @return void
     */
    public function testSetCodeBanque() {

        $obj = new Banques();

        $obj->setCodeBanque("codeBanque");
        $this->assertEquals("codeBanque", $obj->getCodeBanque());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new Banques();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire() {

        $obj = new Banques();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setEdiTdfc() method.
     *
     * @return void
     */
    public function testSetEdiTdfc() {

        $obj = new Banques();

        $obj->setEdiTdfc(true);
        $this->assertEquals(true, $obj->getEdiTdfc());
    }

    /**
     * Tests the setIBAN() method.
     *
     * @return void
     */
    public function testSetIBAN() {

        $obj = new Banques();

        $obj->setIBAN("iBAN");
        $this->assertEquals("iBAN", $obj->getIBAN());
    }

    /**
     * Tests the setIDCarteAppelEnv() method.
     *
     * @return void
     */
    public function testSetIDCarteAppelEnv() {

        $obj = new Banques();

        $obj->setIDCarteAppelEnv("iDCarteAppelEnv");
        $this->assertEquals("iDCarteAppelEnv", $obj->getIDCarteAppelEnv());
    }

    /**
     * Tests the setIDCarteAppelEnv2() method.
     *
     * @return void
     */
    public function testSetIDCarteAppelEnv2() {

        $obj = new Banques();

        $obj->setIDCarteAppelEnv2("iDCarteAppelEnv2");
        $this->assertEquals("iDCarteAppelEnv2", $obj->getIDCarteAppelEnv2());
    }

    /**
     * Tests the setIDCarteAppelEnv3() method.
     *
     * @return void
     */
    public function testSetIDCarteAppelEnv3() {

        $obj = new Banques();

        $obj->setIDCarteAppelEnv3("iDCarteAppelEnv3");
        $this->assertEquals("iDCarteAppelEnv3", $obj->getIDCarteAppelEnv3());
    }

    /**
     * Tests the setIDCarteAppelRec() method.
     *
     * @return void
     */
    public function testSetIDCarteAppelRec() {

        $obj = new Banques();

        $obj->setIDCarteAppelRec("iDCarteAppelRec");
        $this->assertEquals("iDCarteAppelRec", $obj->getIDCarteAppelRec());
    }

    /**
     * Tests the setIsBanqueFact() method.
     *
     * @return void
     */
    public function testSetIsBanqueFact() {

        $obj = new Banques();

        $obj->setIsBanqueFact(true);
        $this->assertEquals(true, $obj->getIsBanqueFact());
    }

    /**
     * Tests the setMandatDateDebutETEBAC() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMandatDateDebutETEBAC() {

        $obj = new Banques();

        $obj->setMandatDateDebutETEBAC(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getMandatDateDebutETEBAC());
    }

    /**
     * Tests the setMandatDureeETEBAC() method.
     *
     * @return void
     */
    public function testSetMandatDureeETEBAC() {

        $obj = new Banques();

        $obj->setMandatDureeETEBAC(10);
        $this->assertEquals(10, $obj->getMandatDureeETEBAC());
    }

    /**
     * Tests the setMandatPieceJointeETEBAC() method.
     *
     * @return void
     */
    public function testSetMandatPieceJointeETEBAC() {

        $obj = new Banques();

        $obj->setMandatPieceJointeETEBAC("mandatPieceJointeETEBAC");
        $this->assertEquals("mandatPieceJointeETEBAC", $obj->getMandatPieceJointeETEBAC());
    }

    /**
     * Tests the setNbPrelevements() method.
     *
     * @return void
     */
    public function testSetNbPrelevements() {

        $obj = new Banques();

        $obj->setNbPrelevements(10);
        $this->assertEquals(10, $obj->getNbPrelevements());
    }

    /**
     * Tests the setNomInt() method.
     *
     * @return void
     */
    public function testSetNomInt() {

        $obj = new Banques();

        $obj->setNomInt("nomInt");
        $this->assertEquals("nomInt", $obj->getNomInt());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new Banques();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests the setRIB() method.
     *
     * @return void
     */
    public function testSetRIB() {

        $obj = new Banques();

        $obj->setRIB("rIB");
        $this->assertEquals("rIB", $obj->getRIB());
    }

    /**
     * Tests the setSepa() method.
     *
     * @return void
     */
    public function testSetSepa() {

        $obj = new Banques();

        $obj->setSepa(true);
        $this->assertEquals(true, $obj->getSepa());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new Banques();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the setUniqID() method.
     *
     * @return void
     */
    public function testSetUniqID() {

        $obj = new Banques();

        $obj->setUniqID("uniqID");
        $this->assertEquals("uniqID", $obj->getUniqID());
    }
}
