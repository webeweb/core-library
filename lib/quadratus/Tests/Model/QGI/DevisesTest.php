<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QGI\Devises;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Devises test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class DevisesTest extends AbstractTestCase {

    /**
     * Test setCodeDevise()
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new Devises();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Test setDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate(): void {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new Devises();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Test setNbDec()
     *
     * @return void
     */
    public function testSetNbDec(): void {

        $obj = new Devises();

        $obj->setNbDec("nbDec");
        $this->assertEquals("nbDec", $obj->getNbDec());
    }

    /**
     * Test setTaux()
     *
     * @return void
     */
    public function testSetTaux(): void {

        $obj = new Devises();

        $obj->setTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux());
    }

    /**
     * Test setUseNbDec()
     *
     * @return void
     */
    public function testSetUseNbDec(): void {

        $obj = new Devises();

        $obj->setUseNbDec(true);
        $this->assertTrue($obj->getUseNbDec());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Devises();

        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getNbDec());
        $this->assertNull($obj->getTaux());
        $this->assertNull($obj->getUseNbDec());
    }
}
