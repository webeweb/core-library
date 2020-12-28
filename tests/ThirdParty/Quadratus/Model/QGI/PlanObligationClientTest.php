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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\PlanObligationClient;

/**
 * Plan obligation client test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class PlanObligationClientTest extends AbstractTestCase {

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new PlanObligationClient();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollabSpecif() method.
     *
     * @return void
     */
    public function testSetCodeCollabSpecif(): void {

        $obj = new PlanObligationClient();

        $obj->setCodeCollabSpecif("codeCollabSpecif");
        $this->assertEquals("codeCollabSpecif", $obj->getCodeCollabSpecif());
    }

    /**
     * Tests the setCodeObligation() method.
     *
     * @return void
     */
    public function testSetCodeObligation(): void {

        $obj = new PlanObligationClient();

        $obj->setCodeObligation("codeObligation");
        $this->assertEquals("codeObligation", $obj->getCodeObligation());
    }

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut(): void {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new PlanObligationClient();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin(): void {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new PlanObligationClient();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Tests the setFrequence() method.
     *
     * @return void
     */
    public function testSetFrequence(): void {

        $obj = new PlanObligationClient();

        $obj->setFrequence("frequence");
        $this->assertEquals("frequence", $obj->getFrequence());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new PlanObligationClient();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setQuiLeFait() method.
     *
     * @return void
     */
    public function testSetQuiLeFait(): void {

        $obj = new PlanObligationClient();

        $obj->setQuiLeFait(10);
        $this->assertEquals(10, $obj->getQuiLeFait());
    }

    /**
     * Tests the __construct() method.
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
