<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\PrepaPaieHSup;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Prepa paie h sup test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class PrepaPaieHSupTest extends AbstractTestCase {

    /**
     * Tests setCodeLibHs()
     *
     * @return void
     */
    public function testSetCodeLibHs(): void {

        $obj = new PrepaPaieHSup();

        $obj->setCodeLibHs("codeLibHs");
        $this->assertEquals("codeLibHs", $obj->getCodeLibHs());
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
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new PrepaPaieHSup();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
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
     * Tests setSemaine()
     *
     * @return void
     */
    public function testSetSemaine(): void {

        $obj = new PrepaPaieHSup();

        $obj->setSemaine("semaine");
        $this->assertEquals("semaine", $obj->getSemaine());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PrepaPaieHSup();

        $this->assertNull($obj->getCodeLibHs());
        $this->assertNull($obj->getNbHSup());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcentHSup());
        $this->assertNull($obj->getSemaine());
    }
}
