<?php

declare(strict_types = 1);

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
use Throwable;
use WBW\Library\Quadratus\Model\QGI\BoniMali;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Boni mali test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class BoniMaliTest extends AbstractTestCase {

    /**
     * Test setBmCalcule()
     *
     * @return void
     */
    public function testSetBmCalcule(): void {

        $obj = new BoniMali();

        $obj->setBmCalcule(true);
        $this->assertTrue($obj->getBmCalcule());
    }

    /**
     * Test setBonus()
     *
     * @return void
     */
    public function testSetBonus(): void {

        $obj = new BoniMali();

        $obj->setBonus(10.092018);
        $this->assertEquals(10.092018, $obj->getBonus());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new BoniMali();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new BoniMali();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeMission()
     *
     * @return void
     */
    public function testSetCodeMission(): void {

        $obj = new BoniMali();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Test setDateBm()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateBm(): void {

        // Set a Date/time mock.
        $dateBm = new DateTime("2018-09-10");

        $obj = new BoniMali();

        $obj->setDateBm($dateBm);
        $this->assertSame($dateBm, $obj->getDateBm());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new BoniMali();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setMalus()
     *
     * @return void
     */
    public function testSetMalus(): void {

        $obj = new BoniMali();

        $obj->setMalus(10.092018);
        $this->assertEquals(10.092018, $obj->getMalus());
    }

    /**
     * Test setMonnaie()
     *
     * @return void
     */
    public function testSetMonnaie(): void {

        $obj = new BoniMali();

        $obj->setMonnaie("monnaie");
        $this->assertEquals("monnaie", $obj->getMonnaie());
    }

    /**
     * Test setNumeroBm()
     *
     * @return void
     */
    public function testSetNumeroBm(): void {

        $obj = new BoniMali();

        $obj->setNumeroBm("numeroBm");
        $this->assertEquals("numeroBm", $obj->getNumeroBm());
    }

    /**
     * Test setNumeroLigne()
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new BoniMali();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
