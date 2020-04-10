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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ObligationsPointees;

/**
 * Obligations pointees test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ObligationsPointeesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ObligationsPointees();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeObligation());
        $this->assertNull($obj->getDateEffet());
        $this->assertNull($obj->getLe());
        $this->assertNull($obj->getPar());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new ObligationsPointees();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeObligation() method.
     *
     * @return void
     */
    public function testSetCodeObligation() {

        $obj = new ObligationsPointees();

        $obj->setCodeObligation("codeObligation");
        $this->assertEquals("codeObligation", $obj->getCodeObligation());
    }

    /**
     * Tests the setDateEffet() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEffet() {

        // Set a Date/time mock.
        $dateEffet = new DateTime("2018-09-10");

        $obj = new ObligationsPointees();

        $obj->setDateEffet($dateEffet);
        $this->assertSame($dateEffet, $obj->getDateEffet());
    }

    /**
     * Tests the setLe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetLe() {

        // Set a Date/time mock.
        $le = new DateTime("2018-09-10");

        $obj = new ObligationsPointees();

        $obj->setLe($le);
        $this->assertSame($le, $obj->getLe());
    }

    /**
     * Tests the setPar() method.
     *
     * @return void
     */
    public function testSetPar() {

        $obj = new ObligationsPointees();

        $obj->setPar("par");
        $this->assertEquals("par", $obj->getPar());
    }
}
