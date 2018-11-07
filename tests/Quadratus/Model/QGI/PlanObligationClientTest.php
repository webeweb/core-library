<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\PlanObligationClient;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Plan obligation client model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class PlanObligationClientTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new PlanObligationClient();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollabSpecif() method.
     *
     * @return void
     */
    public function testSetCodeCollabSpecif() {

        $obj = new PlanObligationClient();

        $obj->setCodeCollabSpecif("codeCollabSpecif");
        $this->assertEquals("codeCollabSpecif", $obj->getCodeCollabSpecif());
    }

    /**
     * Tests the setCodeObligation() method.
     *
     * @return void
     */
    public function testSetCodeObligation() {

        $obj = new PlanObligationClient();

        $obj->setCodeObligation("codeObligation");
        $this->assertEquals("codeObligation", $obj->getCodeObligation());
    }

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     */
    public function testSetDateDebut() {

        $obj = new PlanObligationClient();

        $obj->setDateDebut(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebut());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     */
    public function testSetDateFin() {

        $obj = new PlanObligationClient();

        $obj->setDateFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFin());
    }

    /**
     * Tests the setFrequence() method.
     *
     * @return void
     */
    public function testSetFrequence() {

        $obj = new PlanObligationClient();

        $obj->setFrequence("frequence");
        $this->assertEquals("frequence", $obj->getFrequence());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new PlanObligationClient();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setQuiLeFait() method.
     *
     * @return void
     */
    public function testSetQuiLeFait() {

        $obj = new PlanObligationClient();

        $obj->setQuiLeFait(10);
        $this->assertEquals(10, $obj->getQuiLeFait());
    }

}
