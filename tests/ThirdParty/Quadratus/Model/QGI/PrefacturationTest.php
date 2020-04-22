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
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Prefacturation;

/**
 * Prefacturation test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class PrefacturationTest extends AbstractTestCase {

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new Prefacturation();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new Prefacturation();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new Prefacturation();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeMission() method.
     *
     * @return void
     */
    public function testSetCodeMission() {

        $obj = new Prefacturation();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests the setCodePhase() method.
     *
     * @return void
     */
    public function testSetCodePhase() {

        $obj = new Prefacturation();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement() {

        $obj = new Prefacturation();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setDateSaisie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSaisie() {

        // Set a Date/time mock.
        $dateSaisie = new DateTime("2018-09-10");

        $obj = new Prefacturation();

        $obj->setDateSaisie($dateSaisie);
        $this->assertSame($dateSaisie, $obj->getDateSaisie());
    }

    /**
     * Tests the setDateSysSaisie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysSaisie() {

        // Set a Date/time mock.
        $dateSysSaisie = new DateTime("2018-09-10");

        $obj = new Prefacturation();

        $obj->setDateSysSaisie($dateSysSaisie);
        $this->assertSame($dateSysSaisie, $obj->getDateSysSaisie());
    }

    /**
     * Tests the setFacturable() method.
     *
     * @return void
     */
    public function testSetFacturable() {

        $obj = new Prefacturation();

        $obj->setFacturable(true);
        $this->assertEquals(true, $obj->getFacturable());
    }

    /**
     * Tests the setIdPrefacturation() method.
     *
     * @return void
     */
    public function testSetIdPrefacturation() {

        $obj = new Prefacturation();

        $obj->setIdPrefacturation(10);
        $this->assertEquals(10, $obj->getIdPrefacturation());
    }

    /**
     * Tests the setIsTransf() method.
     *
     * @return void
     */
    public function testSetIsTransf() {

        $obj = new Prefacturation();

        $obj->setIsTransf(true);
        $this->assertEquals(true, $obj->getIsTransf());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new Prefacturation();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMonnaie() method.
     *
     * @return void
     */
    public function testSetMonnaie() {

        $obj = new Prefacturation();

        $obj->setMonnaie("monnaie");
        $this->assertEquals("monnaie", $obj->getMonnaie());
    }

    /**
     * Tests the setPu() method.
     *
     * @return void
     */
    public function testSetPu() {

        $obj = new Prefacturation();

        $obj->setPu(10.092018);
        $this->assertEquals(10.092018, $obj->getPu());
    }

    /**
     * Tests the setQte() method.
     *
     * @return void
     */
    public function testSetQte() {

        $obj = new Prefacturation();

        $obj->setQte(10.092018);
        $this->assertEquals(10.092018, $obj->getQte());
    }

    /**
     * Tests the setUniqIdFacture() method.
     *
     * @return void
     */
    public function testSetUniqIdFacture() {

        $obj = new Prefacturation();

        $obj->setUniqIdFacture("uniqIdFacture");
        $this->assertEquals("uniqIdFacture", $obj->getUniqIdFacture());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Prefacturation();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getDateSaisie());
        $this->assertNull($obj->getDateSysSaisie());
        $this->assertNull($obj->getFacturable());
        $this->assertNull($obj->getIdPrefacturation());
        $this->assertNull($obj->getIsTransf());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMonnaie());
        $this->assertNull($obj->getPu());
        $this->assertNull($obj->getQte());
        $this->assertNull($obj->getUniqIdFacture());
    }
}
