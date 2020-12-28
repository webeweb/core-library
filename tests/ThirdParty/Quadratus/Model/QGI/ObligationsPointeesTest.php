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
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ObligationsPointees();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeObligation() method.
     *
     * @return void
     */
    public function testSetCodeObligation(): void {

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
    public function testSetDateEffet(): void {

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
    public function testSetLe(): void {

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
    public function testSetPar(): void {

        $obj = new ObligationsPointees();

        $obj->setPar("par");
        $this->assertEquals("par", $obj->getPar());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ObligationsPointees();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeObligation());
        $this->assertNull($obj->getDateEffet());
        $this->assertNull($obj->getLe());
        $this->assertNull($obj->getPar());
    }
}
