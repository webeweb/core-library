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

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\LignesIjss;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lignes ijss test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesIjssTest extends AbstractTestCase {

    /**
     * Test setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new LignesIjss();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Test setMontant2()
     *
     * @return void
     */
    public function testSetMontant2(): void {

        $obj = new LignesIjss();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Test setMontantEuroOuFranc()
     *
     * @return void
     */
    public function testSetMontantEuroOuFranc(): void {

        $obj = new LignesIjss();

        $obj->setMontantEuroOuFranc("montantEuroOuFranc");
        $this->assertEquals("montantEuroOuFranc", $obj->getMontantEuroOuFranc());
    }

    /**
     * Test setMotif()
     *
     * @return void
     */
    public function testSetMotif(): void {

        $obj = new LignesIjss();

        $obj->setMotif("motif");
        $this->assertEquals("motif", $obj->getMotif());
    }

    /**
     * Test setMtBrutPerteSalaire()
     *
     * @return void
     */
    public function testSetMtBrutPerteSalaire(): void {

        $obj = new LignesIjss();

        $obj->setMtBrutPerteSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getMtBrutPerteSalaire());
    }

    /**
     * Test setNbC()
     *
     * @return void
     */
    public function testSetNbC(): void {

        $obj = new LignesIjss();

        $obj->setNbC(10.092018);
        $this->assertEquals(10.092018, $obj->getNbC());
    }

    /**
     * Test setNbE()
     *
     * @return void
     */
    public function testSetNbE(): void {

        $obj = new LignesIjss();

        $obj->setNbE(10.092018);
        $this->assertEquals(10.092018, $obj->getNbE());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new LignesIjss();

        $obj->setNumLigne("numLigne");
        $this->assertEquals("numLigne", $obj->getNumLigne());
    }

    /**
     * Test setNumeroAttestation()
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new LignesIjss();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Test setPeriodeDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb(): void {

        // Set a Date/time mock.
        $periodeDeb = new DateTime("2018-09-10");

        $obj = new LignesIjss();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Test setPeriodeFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin(): void {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new LignesIjss();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Test setSalRetEuroOuFranc()
     *
     * @return void
     */
    public function testSetSalRetEuroOuFranc(): void {

        $obj = new LignesIjss();

        $obj->setSalRetEuroOuFranc("salRetEuroOuFranc");
        $this->assertEquals("salRetEuroOuFranc", $obj->getSalRetEuroOuFranc());
    }

    /**
     * Test setSalaireRet()
     *
     * @return void
     */
    public function testSetSalaireRet(): void {

        $obj = new LignesIjss();

        $obj->setSalaireRet(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireRet());
    }

    /**
     * Test setSommeRegul1()
     *
     * @return void
     */
    public function testSetSommeRegul1(): void {

        $obj = new LignesIjss();

        $obj->setSommeRegul1(10.092018);
        $this->assertEquals(10.092018, $obj->getSommeRegul1());
    }

    /**
     * Test setSommeRegul2()
     *
     * @return void
     */
    public function testSetSommeRegul2(): void {

        $obj = new LignesIjss();

        $obj->setSommeRegul2(10.092018);
        $this->assertEquals(10.092018, $obj->getSommeRegul2());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LignesIjss();

        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontantEuroOuFranc());
        $this->assertNull($obj->getMotif());
        $this->assertNull($obj->getMtBrutPerteSalaire());
        $this->assertNull($obj->getNbC());
        $this->assertNull($obj->getNbE());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getSalRetEuroOuFranc());
        $this->assertNull($obj->getSalaireRet());
        $this->assertNull($obj->getSommeRegul1());
        $this->assertNull($obj->getSommeRegul2());
    }
}
