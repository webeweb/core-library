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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\BoniMali;

/**
 * Boni mali test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class BoniMaliTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new BoniMali();

        $this->assertNull($obj->getBmCalcule());
        $this->assertNull($obj->getBonus());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getDateBm());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMalus());
        $this->assertNull($obj->getMonnaie());
        $this->assertNull($obj->getNumeroBm());
        $this->assertNull($obj->getNumeroLigne());
    }

    /**
     * Tests the setBmCalcule() method.
     *
     * @return void
     */
    public function testSetBmCalcule() {

        $obj = new BoniMali();

        $obj->setBmCalcule(true);
        $this->assertEquals(true, $obj->getBmCalcule());
    }

    /**
     * Tests the setBonus() method.
     *
     * @return void
     */
    public function testSetBonus() {

        $obj = new BoniMali();

        $obj->setBonus(10.092018);
        $this->assertEquals(10.092018, $obj->getBonus());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new BoniMali();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new BoniMali();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeMission() method.
     *
     * @return void
     */
    public function testSetCodeMission() {

        $obj = new BoniMali();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests the setDateBm() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateBm() {

        // Set a Date/time mock.
        $dateBm = new DateTime("2018-09-10");

        $obj = new BoniMali();

        $obj->setDateBm($dateBm);
        $this->assertSame($dateBm, $obj->getDateBm());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new BoniMali();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMalus() method.
     *
     * @return void
     */
    public function testSetMalus() {

        $obj = new BoniMali();

        $obj->setMalus(10.092018);
        $this->assertEquals(10.092018, $obj->getMalus());
    }

    /**
     * Tests the setMonnaie() method.
     *
     * @return void
     */
    public function testSetMonnaie() {

        $obj = new BoniMali();

        $obj->setMonnaie("monnaie");
        $this->assertEquals("monnaie", $obj->getMonnaie());
    }

    /**
     * Tests the setNumeroBm() method.
     *
     * @return void
     */
    public function testSetNumeroBm() {

        $obj = new BoniMali();

        $obj->setNumeroBm("numeroBm");
        $this->assertEquals("numeroBm", $obj->getNumeroBm());
    }

    /**
     * Tests the setNumeroLigne() method.
     *
     * @return void
     */
    public function testSetNumeroLigne() {

        $obj = new BoniMali();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }
}
