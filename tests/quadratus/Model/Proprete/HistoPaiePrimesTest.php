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
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\HistoPaiePrimes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Histo paie primes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class HistoPaiePrimesTest extends AbstractTestCase {

    /**
     * Test setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new HistoPaiePrimes();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Test setCodePrime()
     *
     * @return void
     */
    public function testSetCodePrime(): void {

        $obj = new HistoPaiePrimes();

        $obj->setCodePrime("codePrime");
        $this->assertEquals("codePrime", $obj->getCodePrime());
    }

    /**
     * Test setNombrePrime()
     *
     * @return void
     */
    public function testSetNombrePrime(): void {

        $obj = new HistoPaiePrimes();

        $obj->setNombrePrime(10.092018);
        $this->assertEquals(10.092018, $obj->getNombrePrime());
    }

    /**
     * Test setNumeroPrime()
     *
     * @return void
     */
    public function testSetNumeroPrime(): void {

        $obj = new HistoPaiePrimes();

        $obj->setNumeroPrime(10);
        $this->assertEquals(10, $obj->getNumeroPrime());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new HistoPaiePrimes();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setPeriodeRappel()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeRappel(): void {

        // Set a Date/time mock.
        $periodeRappel = new DateTime("2018-09-10");

        $obj = new HistoPaiePrimes();

        $obj->setPeriodeRappel($periodeRappel);
        $this->assertSame($periodeRappel, $obj->getPeriodeRappel());
    }

    /**
     * Test setTauxPrime()
     *
     * @return void
     */
    public function testSetTauxPrime(): void {

        $obj = new HistoPaiePrimes();

        $obj->setTauxPrime(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPrime());
    }

    /**
     * Test setTypePrime()
     *
     * @return void
     */
    public function testSetTypePrime(): void {

        $obj = new HistoPaiePrimes();

        $obj->setTypePrime("typePrime");
        $this->assertEquals("typePrime", $obj->getTypePrime());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HistoPaiePrimes();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodePrime());
        $this->assertNull($obj->getNombrePrime());
        $this->assertNull($obj->getNumeroPrime());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPeriodeRappel());
        $this->assertNull($obj->getTauxPrime());
        $this->assertNull($obj->getTypePrime());
    }
}
