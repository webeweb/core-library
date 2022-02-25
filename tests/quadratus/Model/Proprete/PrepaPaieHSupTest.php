<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\PrepaPaieHSup;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Prepa paie h sup test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PrepaPaieHSupTest extends AbstractTestCase {

    /**
     * Tests setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new PrepaPaieHSup();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests setNbHSup()
     *
     * @return void
     */
    public function testSetNbHSup(): void {

        $obj = new PrepaPaieHSup();

        $obj->setNbHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup());
    }

    /**
     * Tests setNumSem()
     *
     * @return void
     */
    public function testSetNumSem(): void {

        $obj = new PrepaPaieHSup();

        $obj->setNumSem("numSem");
        $this->assertEquals("numSem", $obj->getNumSem());
    }

    /**
     * Tests setPeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new PrepaPaieHSup();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setPourcentHSup()
     *
     * @return void
     */
    public function testSetPourcentHSup(): void {

        $obj = new PrepaPaieHSup();

        $obj->setPourcentHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentHSup());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PrepaPaieHSup();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getNbHSup());
        $this->assertNull($obj->getNumSem());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcentHSup());
    }
}
