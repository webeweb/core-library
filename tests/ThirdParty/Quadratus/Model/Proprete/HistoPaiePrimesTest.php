<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\HistoPaiePrimes;

/**
 * Histo paie primes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPaiePrimesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new HistoPaiePrimes();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodePrime() method.
     *
     * @return void
     */
    public function testSetCodePrime() {

        $obj = new HistoPaiePrimes();

        $obj->setCodePrime("codePrime");
        $this->assertEquals("codePrime", $obj->getCodePrime());
    }

    /**
     * Tests the setNombrePrime() method.
     *
     * @return void
     */
    public function testSetNombrePrime() {

        $obj = new HistoPaiePrimes();

        $obj->setNombrePrime(10.092018);
        $this->assertEquals(10.092018, $obj->getNombrePrime());
    }

    /**
     * Tests the setNumeroPrime() method.
     *
     * @return void
     */
    public function testSetNumeroPrime() {

        $obj = new HistoPaiePrimes();

        $obj->setNumeroPrime(10);
        $this->assertEquals(10, $obj->getNumeroPrime());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new HistoPaiePrimes();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setPeriodeRappel() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeRappel() {

        // Set a Date/time mock.
        $periodeRappel = new DateTime("2018-09-10");

        $obj = new HistoPaiePrimes();

        $obj->setPeriodeRappel($periodeRappel);
        $this->assertSame($periodeRappel, $obj->getPeriodeRappel());
    }

    /**
     * Tests the setTauxPrime() method.
     *
     * @return void
     */
    public function testSetTauxPrime() {

        $obj = new HistoPaiePrimes();

        $obj->setTauxPrime(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPrime());
    }

    /**
     * Tests the setTypePrime() method.
     *
     * @return void
     */
    public function testSetTypePrime() {

        $obj = new HistoPaiePrimes();

        $obj->setTypePrime("typePrime");
        $this->assertEquals("typePrime", $obj->getTypePrime());
    }
}
