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
use WBW\Library\Quadratus\Model\QGI\ObligationsPointees;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Obligations pointees test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ObligationsPointeesTest extends AbstractTestCase {

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ObligationsPointees();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeObligation()
     *
     * @return void
     */
    public function testSetCodeObligation(): void {

        $obj = new ObligationsPointees();

        $obj->setCodeObligation("codeObligation");
        $this->assertEquals("codeObligation", $obj->getCodeObligation());
    }

    /**
     * Test setDateEffet()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEffet(): void {

        // Set a Date/time mock.
        $dateEffet = new DateTime("2018-09-10");

        $obj = new ObligationsPointees();

        $obj->setDateEffet($dateEffet);
        $this->assertSame($dateEffet, $obj->getDateEffet());
    }

    /**
     * Test setLe()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetLe(): void {

        // Set a Date/time mock.
        $le = new DateTime("2018-09-10");

        $obj = new ObligationsPointees();

        $obj->setLe($le);
        $this->assertSame($le, $obj->getLe());
    }

    /**
     * Test setPar()
     *
     * @return void
     */
    public function testSetPar(): void {

        $obj = new ObligationsPointees();

        $obj->setPar("par");
        $this->assertEquals("par", $obj->getPar());
    }

    /**
     * Test __construct()
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
