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
use WBW\Library\Quadratus\Model\QPaie\SalairesAttestation;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Salaires attestation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class SalairesAttestationTest extends AbstractTestCase {

    /**
     * Tests setDatePaie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePaie(): void {

        // Set a Date/time mock.
        $datePaie = new DateTime("2018-09-10");

        $obj = new SalairesAttestation();

        $obj->setDatePaie($datePaie);
        $this->assertSame($datePaie, $obj->getDatePaie());
    }

    /**
     * Tests setEuroOuFranc()
     *
     * @return void
     */
    public function testSetEuroOuFranc(): void {

        $obj = new SalairesAttestation();

        $obj->setEuroOuFranc("euroOuFranc");
        $this->assertEquals("euroOuFranc", $obj->getEuroOuFranc());
    }

    /**
     * Tests setHeuresTrav()
     *
     * @return void
     */
    public function testSetHeuresTrav(): void {

        $obj = new SalairesAttestation();

        $obj->setHeuresTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav());
    }

    /**
     * Tests setJoursNonPayes()
     *
     * @return void
     */
    public function testSetJoursNonPayes(): void {

        $obj = new SalairesAttestation();

        $obj->setJoursNonPayes(10.092018);
        $this->assertEquals(10.092018, $obj->getJoursNonPayes());
    }

    /**
     * Tests setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new SalairesAttestation();

        $obj->setNumLigne("numLigne");
        $this->assertEquals("numLigne", $obj->getNumLigne());
    }

    /**
     * Tests setNumeroAttestation()
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new SalairesAttestation();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests setObservation()
     *
     * @return void
     */
    public function testSetObservation(): void {

        $obj = new SalairesAttestation();

        $obj->setObservation("observation");
        $this->assertEquals("observation", $obj->getObservation());
    }

    /**
     * Tests setPeriodeDeb()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb(): void {

        // Set a Date/time mock.
        $periodeDeb = new DateTime("2018-09-10");

        $obj = new SalairesAttestation();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Tests setPeriodeFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin(): void {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new SalairesAttestation();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Tests setPrecompte()
     *
     * @return void
     */
    public function testSetPrecompte(): void {

        $obj = new SalairesAttestation();

        $obj->setPrecompte(10.092018);
        $this->assertEquals(10.092018, $obj->getPrecompte());
    }

    /**
     * Tests setSalaireBrut()
     *
     * @return void
     */
    public function testSetSalaireBrut(): void {

        $obj = new SalairesAttestation();

        $obj->setSalaireBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBrut());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SalairesAttestation();

        $this->assertNull($obj->getDatePaie());
        $this->assertNull($obj->getEuroOuFranc());
        $this->assertNull($obj->getHeuresTrav());
        $this->assertNull($obj->getJoursNonPayes());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getObservation());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getPrecompte());
        $this->assertNull($obj->getSalaireBrut());
    }
}
