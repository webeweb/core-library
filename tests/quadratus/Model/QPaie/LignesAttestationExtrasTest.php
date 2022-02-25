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
use WBW\Library\Quadratus\Model\QPaie\LignesAttestationExtras;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lignes attestation extras test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesAttestationExtrasTest extends AbstractTestCase {

    /**
     * Tests setDateDebut()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut(): void {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new LignesAttestationExtras();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Tests setDateFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin(): void {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new LignesAttestationExtras();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Tests setMontantIccp()
     *
     * @return void
     */
    public function testSetMontantIccp(): void {

        $obj = new LignesAttestationExtras();

        $obj->setMontantIccp(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantIccp());
    }

    /**
     * Tests setMontantIpe()
     *
     * @return void
     */
    public function testSetMontantIpe(): void {

        $obj = new LignesAttestationExtras();

        $obj->setMontantIpe(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantIpe());
    }

    /**
     * Tests setMontantPrecompte()
     *
     * @return void
     */
    public function testSetMontantPrecompte(): void {

        $obj = new LignesAttestationExtras();

        $obj->setMontantPrecompte(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantPrecompte());
    }

    /**
     * Tests setNbHeureTrav()
     *
     * @return void
     */
    public function testSetNbHeureTrav(): void {

        $obj = new LignesAttestationExtras();

        $obj->setNbHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTrav());
    }

    /**
     * Tests setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new LignesAttestationExtras();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests setNumeroAttestation()
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new LignesAttestationExtras();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new LignesAttestationExtras();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setSalaireBrut()
     *
     * @return void
     */
    public function testSetSalaireBrut(): void {

        $obj = new LignesAttestationExtras();

        $obj->setSalaireBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBrut());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LignesAttestationExtras();

        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getMontantIccp());
        $this->assertNull($obj->getMontantIpe());
        $this->assertNull($obj->getMontantPrecompte());
        $this->assertNull($obj->getNbHeureTrav());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getSalaireBrut());
    }
}
