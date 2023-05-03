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
use Throwable;
use WBW\Library\Quadratus\Model\QGI\PlanObligationClient;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Plan obligation client test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class PlanObligationClientTest extends AbstractTestCase {

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new PlanObligationClient();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeCollabSpecif()
     *
     * @return void
     */
    public function testSetCodeCollabSpecif(): void {

        $obj = new PlanObligationClient();

        $obj->setCodeCollabSpecif("codeCollabSpecif");
        $this->assertEquals("codeCollabSpecif", $obj->getCodeCollabSpecif());
    }

    /**
     * Test setCodeObligation()
     *
     * @return void
     */
    public function testSetCodeObligation(): void {

        $obj = new PlanObligationClient();

        $obj->setCodeObligation("codeObligation");
        $this->assertEquals("codeObligation", $obj->getCodeObligation());
    }

    /**
     * Test setDateDebut()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebut(): void {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new PlanObligationClient();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Test setDateFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFin(): void {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new PlanObligationClient();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Test setFrequence()
     *
     * @return void
     */
    public function testSetFrequence(): void {

        $obj = new PlanObligationClient();

        $obj->setFrequence("frequence");
        $this->assertEquals("frequence", $obj->getFrequence());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new PlanObligationClient();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Test setQuiLeFait()
     *
     * @return void
     */
    public function testSetQuiLeFait(): void {

        $obj = new PlanObligationClient();

        $obj->setQuiLeFait(10);
        $this->assertEquals(10, $obj->getQuiLeFait());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PlanObligationClient();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollabSpecif());
        $this->assertNull($obj->getCodeObligation());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getFrequence());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getQuiLeFait());
    }
}
