<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\SalairesAttestation;

/**
 * Salaires attestation model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class SalairesAttestationTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setDatePaie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePaie() {

        $obj = new SalairesAttestation();

        $obj->setDatePaie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePaie());
    }

    /**
     * Tests the setEuroOuFranc() method.
     *
     * @return void
     */
    public function testSetEuroOuFranc() {

        $obj = new SalairesAttestation();

        $obj->setEuroOuFranc("euroOuFranc");
        $this->assertEquals("euroOuFranc", $obj->getEuroOuFranc());
    }

    /**
     * Tests the setHeuresTrav() method.
     *
     * @return void
     */
    public function testSetHeuresTrav() {

        $obj = new SalairesAttestation();

        $obj->setHeuresTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav());
    }

    /**
     * Tests the setJoursNonPayes() method.
     *
     * @return void
     */
    public function testSetJoursNonPayes() {

        $obj = new SalairesAttestation();

        $obj->setJoursNonPayes(10.092018);
        $this->assertEquals(10.092018, $obj->getJoursNonPayes());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new SalairesAttestation();

        $obj->setNumLigne("numLigne");
        $this->assertEquals("numLigne", $obj->getNumLigne());
    }

    /**
     * Tests the setNumeroAttestation() method.
     *
     * @return void
     */
    public function testSetNumeroAttestation() {

        $obj = new SalairesAttestation();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests the setObservation() method.
     *
     * @return void
     */
    public function testSetObservation() {

        $obj = new SalairesAttestation();

        $obj->setObservation("observation");
        $this->assertEquals("observation", $obj->getObservation());
    }

    /**
     * Tests the setPeriodeDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb() {

        $obj = new SalairesAttestation();

        $obj->setPeriodeDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDeb());
    }

    /**
     * Tests the setPeriodeFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin() {

        $obj = new SalairesAttestation();

        $obj->setPeriodeFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeFin());
    }

    /**
     * Tests the setPrecompte() method.
     *
     * @return void
     */
    public function testSetPrecompte() {

        $obj = new SalairesAttestation();

        $obj->setPrecompte(10.092018);
        $this->assertEquals(10.092018, $obj->getPrecompte());
    }

    /**
     * Tests the setSalaireBrut() method.
     *
     * @return void
     */
    public function testSetSalaireBrut() {

        $obj = new SalairesAttestation();

        $obj->setSalaireBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBrut());
    }
}
