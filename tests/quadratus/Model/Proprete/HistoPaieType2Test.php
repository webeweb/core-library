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
use WBW\Library\Quadratus\Model\Proprete\HistoPaieType2;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Histo paie type2 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class HistoPaieType2Test extends AbstractTestCase {

    /**
     * Tests setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new HistoPaieType2();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests setCodePrime()
     *
     * @return void
     */
    public function testSetCodePrime(): void {

        $obj = new HistoPaieType2();

        $obj->setCodePrime("codePrime");
        $this->assertEquals("codePrime", $obj->getCodePrime());
    }

    /**
     * Tests setNbHeures()
     *
     * @return void
     */
    public function testSetNbHeures(): void {

        $obj = new HistoPaieType2();

        $obj->setNbHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures());
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

        $obj = new HistoPaieType2();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setTauxMajoration()
     *
     * @return void
     */
    public function testSetTauxMajoration(): void {

        $obj = new HistoPaieType2();

        $obj->setTauxMajoration(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxMajoration());
    }

    /**
     * Tests setTypeDnjf()
     *
     * @return void
     */
    public function testSetTypeDnjf(): void {

        $obj = new HistoPaieType2();

        $obj->setTypeDnjf("typeDnjf");
        $this->assertEquals("typeDnjf", $obj->getTypeDnjf());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HistoPaieType2();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodePrime());
        $this->assertNull($obj->getNbHeures());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTauxMajoration());
        $this->assertNull($obj->getTypeDnjf());
    }
}
