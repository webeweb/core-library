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
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\LignesAtc;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lignes atc test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesAtcTest extends AbstractTestCase {

    /**
     * Test setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new LignesAtc();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Test setMontantCotis()
     *
     * @return void
     */
    public function testSetMontantCotis(): void {

        $obj = new LignesAtc();

        $obj->setMontantCotis(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCotis());
    }

    /**
     * Test setMotif()
     *
     * @return void
     */
    public function testSetMotif(): void {

        $obj = new LignesAtc();

        $obj->setMotif("motif");
        $this->assertEquals("motif", $obj->getMotif());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new LignesAtc();

        $obj->setNumLigne("numLigne");
        $this->assertEquals("numLigne", $obj->getNumLigne());
    }

    /**
     * Test setNumeroAttestation()
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new LignesAtc();

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

        $obj = new LignesAtc();

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

        $obj = new LignesAtc();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Test setPsEuroOuFranc()
     *
     * @return void
     */
    public function testSetPsEuroOuFranc(): void {

        $obj = new LignesAtc();

        $obj->setPsEuroOuFranc("psEuroOuFranc");
        $this->assertEquals("psEuroOuFranc", $obj->getPsEuroOuFranc());
    }

    /**
     * Test setSalaireEuroOuFranc()
     *
     * @return void
     */
    public function testSetSalaireEuroOuFranc(): void {

        $obj = new LignesAtc();

        $obj->setSalaireEuroOuFranc("salaireEuroOuFranc");
        $this->assertEquals("salaireEuroOuFranc", $obj->getSalaireEuroOuFranc());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LignesAtc();

        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMontantCotis());
        $this->assertNull($obj->getMotif());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getPsEuroOuFranc());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getSalaireEuroOuFranc());
    }
}
