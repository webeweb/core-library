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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\HeuresAbsence;

/**
 * Heures absence test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class HeuresAbsenceTest extends AbstractTestCase {

    /**
     * Tests the setAbsenceAu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAbsenceAu() {

        // Set a Date/time mock.
        $absenceAu = new DateTime("2018-09-10");

        $obj = new HeuresAbsence();

        $obj->setAbsenceAu($absenceAu);
        $this->assertSame($absenceAu, $obj->getAbsenceAu());
    }

    /**
     * Tests the setAbsenceDu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAbsenceDu() {

        // Set a Date/time mock.
        $absenceDu = new DateTime("2018-09-10");

        $obj = new HeuresAbsence();

        $obj->setAbsenceDu($absenceDu);
        $this->assertSame($absenceDu, $obj->getAbsenceDu());
    }

    /**
     * Tests the setDateJour() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateJour() {

        // Set a Date/time mock.
        $dateJour = new DateTime("2018-09-10");

        $obj = new HeuresAbsence();

        $obj->setDateJour($dateJour);
        $this->assertSame($dateJour, $obj->getDateJour());
    }

    /**
     * Tests the setNbHNonEffectue() method.
     *
     * @return void
     */
    public function testSetNbHNonEffectue() {

        $obj = new HeuresAbsence();

        $obj->setNbHNonEffectue(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHNonEffectue());
    }

    /**
     * Tests the setNbHRetenueSalaire() method.
     *
     * @return void
     */
    public function testSetNbHRetenueSalaire() {

        $obj = new HeuresAbsence();

        $obj->setNbHRetenueSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRetenueSalaire());
    }

    /**
     * Tests the setNbHaReintegrer() method.
     *
     * @return void
     */
    public function testSetNbHaReintegrer() {

        $obj = new HeuresAbsence();

        $obj->setNbHaReintegrer(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHaReintegrer());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new HeuresAbsence();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setTransfere() method.
     *
     * @return void
     */
    public function testSetTransfere() {

        $obj = new HeuresAbsence();

        $obj->setTransfere("transfere");
        $this->assertEquals("transfere", $obj->getTransfere());
    }

    /**
     * Tests the setTypeAbsence() method.
     *
     * @return void
     */
    public function testSetTypeAbsence() {

        $obj = new HeuresAbsence();

        $obj->setTypeAbsence("typeAbsence");
        $this->assertEquals("typeAbsence", $obj->getTypeAbsence());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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
