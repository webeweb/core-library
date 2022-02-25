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
use WBW\Library\Quadratus\Model\Proprete\HistoPaieAnal;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Histo paie anal test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class HistoPaieAnalTest extends AbstractTestCase {

    /**
     * Tests setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new HistoPaieAnal();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new HistoPaieAnal();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests setCodeNature()
     *
     * @return void
     */
    public function testSetCodeNature(): void {

        $obj = new HistoPaieAnal();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests setNumeroLigneAnal()
     *
     * @return void
     */
    public function testSetNumeroLigneAnal(): void {

        $obj = new HistoPaieAnal();

        $obj->setNumeroLigneAnal(10);
        $this->assertEquals(10, $obj->getNumeroLigneAnal());
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

        $obj = new HistoPaieAnal();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setPourcent()
     *
     * @return void
     */
    public function testSetPourcent(): void {

        $obj = new HistoPaieAnal();

        $obj->setPourcent(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcent());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HistoPaieAnal();

        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getNumeroLigneAnal());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcent());
    }
}
