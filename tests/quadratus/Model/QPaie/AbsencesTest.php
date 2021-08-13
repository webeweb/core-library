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
use WBW\Library\Quadratus\Model\QPaie\Absences;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Absences test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class AbsencesTest extends AbstractTestCase {

    /**
     * Tests the setAbsJour() method.
     *
     * @return void
     */
    public function testSetAbsJour(): void {

        $obj = new Absences();

        $obj->setAbsJour(true);
        $this->assertEquals(true, $obj->getAbsJour());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new Absences();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeUser() method.
     *
     * @return void
     */
    public function testSetCodeUser(): void {

        $obj = new Absences();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Tests the setCongesPayes() method.
     *
     * @return void
     */
    public function testSetCongesPayes(): void {

        $obj = new Absences();

        $obj->setCongesPayes(true);
        $this->assertEquals(true, $obj->getCongesPayes());
    }

    /**
     * Tests the setDateAdded() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAdded(): void {

        // Set a Date/time mock.
        $dateAdded = new DateTime("2018-09-10");

        $obj = new Absences();

        $obj->setDateAdded($dateAdded);
        $this->assertSame($dateAdded, $obj->getDateAdded());
    }

    /**
     * Tests the setDateAddedColl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAddedColl(): void {

        // Set a Date/time mock.
        $dateAddedColl = new DateTime("2018-09-10");

        $obj = new Absences();

        $obj->setDateAddedColl($dateAddedColl);
        $this->assertSame($dateAddedColl, $obj->getDateAddedColl());
    }

    /**
     * Tests the setInBul() method.
     *
     * @return void
     */
    public function testSetInBul(): void {

        $obj = new Absences();

        $obj->setInBul(true);
        $this->assertEquals(true, $obj->getInBul());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new Absences();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNb30() method.
     *
     * @return void
     */
    public function testSetNb30(): void {

        $obj = new Absences();

        $obj->setNb30(10.092018);
        $this->assertEquals(10.092018, $obj->getNb30());
    }

    /**
     * Tests the setNbHAbCpCalcule() method.
     *
     * @return void
     */
    public function testSetNbHAbCpCalcule(): void {

        $obj = new Absences();

        $obj->setNbHAbCpCalcule(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbCpCalcule());
    }

    /**
     * Tests the setNbHAbCpSaisi() method.
     *
     * @return void
     */
    public function testSetNbHAbCpSaisi(): void {

        $obj = new Absences();

        $obj->setNbHAbCpSaisi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbCpSaisi());
    }

    /**
     * Tests the setNbJh() method.
     *
     * @return void
     */
    public function testSetNbJh(): void {

        $obj = new Absences();

        $obj->setNbJh(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJh());
    }

    /**
     * Tests the setNbJhCalcule() method.
     *
     * @return void
     */
    public function testSetNbJhCalcule(): void {

        $obj = new Absences();

        $obj->setNbJhCalcule(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJhCalcule());
    }

    /**
     * Tests the setNumEvenement() method.
     *
     * @return void
     */
    public function testSetNumEvenement(): void {

        $obj = new Absences();

        $obj->setNumEvenement(10);
        $this->assertEquals(10, $obj->getNumEvenement());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new Absences();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new Absences();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriodeBul() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeBul(): void {

        // Set a Date/time mock.
        $periodeBul = new DateTime("2018-09-10");

        $obj = new Absences();

        $obj->setPeriodeBul($periodeBul);
        $this->assertSame($periodeBul, $obj->getPeriodeBul());
    }

    /**
     * Tests the setPeriodeDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb(): void {

        // Set a Date/time mock.
        $periodeDeb = new DateTime("2018-09-10");

        $obj = new Absences();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Tests the setPeriodeFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin(): void {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new Absences();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Tests the setProlongation() method.
     *
     * @return void
     */
    public function testSetProlongation(): void {

        $obj = new Absences();

        $obj->setProlongation(true);
        $this->assertEquals(true, $obj->getProlongation());
    }

    /**
     * Tests the setReprise() method.
     *
     * @return void
     */
    public function testSetReprise(): void {

        $obj = new Absences();

        $obj->setReprise(true);
        $this->assertEquals(true, $obj->getReprise());
    }

    /**
     * Tests the setTypeAbs() method.
     *
     * @return void
     */
    public function testSetTypeAbs(): void {

        $obj = new Absences();

        $obj->setTypeAbs("typeAbs");
        $this->assertEquals("typeAbs", $obj->getTypeAbs());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Absences();

        $this->assertNull($obj->getAbsJour());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getCongesPayes());
        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getDateAddedColl());
        $this->assertNull($obj->getInBul());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNb30());
        $this->assertNull($obj->getNbHAbCpCalcule());
        $this->assertNull($obj->getNbHAbCpSaisi());
        $this->assertNull($obj->getNbJh());
        $this->assertNull($obj->getNbJhCalcule());
        $this->assertNull($obj->getNumEvenement());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriodeBul());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getProlongation());
        $this->assertNull($obj->getReprise());
        $this->assertNull($obj->getTypeAbs());
    }
}
