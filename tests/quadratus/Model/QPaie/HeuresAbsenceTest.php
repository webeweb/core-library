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
use WBW\Library\Quadratus\Model\QPaie\HeuresAbsence;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Heures absence test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class HeuresAbsenceTest extends AbstractTestCase {

    /**
     * Tests setAbsenceAu()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAbsenceAu(): void {

        // Set a Date/time mock.
        $absenceAu = new DateTime("2018-09-10");

        $obj = new HeuresAbsence();

        $obj->setAbsenceAu($absenceAu);
        $this->assertSame($absenceAu, $obj->getAbsenceAu());
    }

    /**
     * Tests setAbsenceDu()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAbsenceDu(): void {

        // Set a Date/time mock.
        $absenceDu = new DateTime("2018-09-10");

        $obj = new HeuresAbsence();

        $obj->setAbsenceDu($absenceDu);
        $this->assertSame($absenceDu, $obj->getAbsenceDu());
    }

    /**
     * Tests setDateJour()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateJour(): void {

        // Set a Date/time mock.
        $dateJour = new DateTime("2018-09-10");

        $obj = new HeuresAbsence();

        $obj->setDateJour($dateJour);
        $this->assertSame($dateJour, $obj->getDateJour());
    }

    /**
     * Tests setNbHNonEffectue()
     *
     * @return void
     */
    public function testSetNbHNonEffectue(): void {

        $obj = new HeuresAbsence();

        $obj->setNbHNonEffectue(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHNonEffectue());
    }

    /**
     * Tests setNbHRetenueSalaire()
     *
     * @return void
     */
    public function testSetNbHRetenueSalaire(): void {

        $obj = new HeuresAbsence();

        $obj->setNbHRetenueSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRetenueSalaire());
    }

    /**
     * Tests setNbHaReintegrer()
     *
     * @return void
     */
    public function testSetNbHaReintegrer(): void {

        $obj = new HeuresAbsence();

        $obj->setNbHaReintegrer(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHaReintegrer());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new HeuresAbsence();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setTransfere()
     *
     * @return void
     */
    public function testSetTransfere(): void {

        $obj = new HeuresAbsence();

        $obj->setTransfere("transfere");
        $this->assertEquals("transfere", $obj->getTransfere());
    }

    /**
     * Tests setTypeAbsence()
     *
     * @return void
     */
    public function testSetTypeAbsence(): void {

        $obj = new HeuresAbsence();

        $obj->setTypeAbsence("typeAbsence");
        $this->assertEquals("typeAbsence", $obj->getTypeAbsence());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HeuresAbsence();

        $this->assertNull($obj->getAbsenceAu());
        $this->assertNull($obj->getAbsenceDu());
        $this->assertNull($obj->getDateJour());
        $this->assertNull($obj->getNbHaReintegrer());
        $this->assertNull($obj->getNbHNonEffectue());
        $this->assertNull($obj->getNbHRetenueSalaire());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTransfere());
        $this->assertNull($obj->getTypeAbsence());
    }
}
