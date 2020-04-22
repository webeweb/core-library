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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\AbsencesExcelHisto;

/**
 * Absences excel histo test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AbsencesExcelHistoTest extends AbstractTestCase {

    /**
     * Tests the setDateAdded() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAdded() {

        // Set a Date/time mock.
        $dateAdded = new DateTime("2018-09-10");

        $obj = new AbsencesExcelHisto();

        $obj->setDateAdded($dateAdded);
        $this->assertSame($dateAdded, $obj->getDateAdded());
    }

    /**
     * Tests the setId() method.
     *
     * @return void
     */
    public function testSetId() {

        $obj = new AbsencesExcelHisto();

        $obj->setId("id");
        $this->assertEquals("id", $obj->getId());
    }

    /**
     * Tests the setNbhSais() method.
     *
     * @return void
     */
    public function testSetNbhSais() {

        $obj = new AbsencesExcelHisto();

        $obj->setNbhSais(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhSais());
    }

    /**
     * Tests the setNbhSaisCorr() method.
     *
     * @return void
     */
    public function testSetNbhSaisCorr() {

        $obj = new AbsencesExcelHisto();

        $obj->setNbhSaisCorr(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhSaisCorr());
    }

    /**
     * Tests the setNbjSais() method.
     *
     * @return void
     */
    public function testSetNbjSais() {

        $obj = new AbsencesExcelHisto();

        $obj->setNbjSais(10.092018);
        $this->assertEquals(10.092018, $obj->getNbjSais());
    }

    /**
     * Tests the setNbjSaisCorr() method.
     *
     * @return void
     */
    public function testSetNbjSaisCorr() {

        $obj = new AbsencesExcelHisto();

        $obj->setNbjSaisCorr(10.092018);
        $this->assertEquals(10.092018, $obj->getNbjSaisCorr());
    }

    /**
     * Tests the setNumEvenement() method.
     *
     * @return void
     */
    public function testSetNumEvenement() {

        $obj = new AbsencesExcelHisto();

        $obj->setNumEvenement(10);
        $this->assertEquals(10, $obj->getNumEvenement());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new AbsencesExcelHisto();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPerPaie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerPaie() {

        // Set a Date/time mock.
        $perPaie = new DateTime("2018-09-10");

        $obj = new AbsencesExcelHisto();

        $obj->setPerPaie($perPaie);
        $this->assertSame($perPaie, $obj->getPerPaie());
    }

    /**
     * Tests the setPeriodeDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb() {

        // Set a Date/time mock.
        $periodeDeb = new DateTime("2018-09-10");

        $obj = new AbsencesExcelHisto();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Tests the setPeriodeDebCorr() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDebCorr() {

        // Set a Date/time mock.
        $periodeDebCorr = new DateTime("2018-09-10");

        $obj = new AbsencesExcelHisto();

        $obj->setPeriodeDebCorr($periodeDebCorr);
        $this->assertSame($periodeDebCorr, $obj->getPeriodeDebCorr());
    }

    /**
     * Tests the setPeriodeFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin() {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new AbsencesExcelHisto();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Tests the setPeriodeFinCorr() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeFinCorr() {

        // Set a Date/time mock.
        $periodeFinCorr = new DateTime("2018-09-10");

        $obj = new AbsencesExcelHisto();

        $obj->setPeriodeFinCorr($periodeFinCorr);
        $this->assertSame($periodeFinCorr, $obj->getPeriodeFinCorr());
    }

    /**
     * Tests the setTransfertAbs() method.
     *
     * @return void
     */
    public function testSetTransfertAbs() {

        $obj = new AbsencesExcelHisto();

        $obj->setTransfertAbs(true);
        $this->assertEquals(true, $obj->getTransfertAbs());
    }

    /**
     * Tests the setTypeAbsCp() method.
     *
     * @return void
     */
    public function testSetTypeAbsCp() {

        $obj = new AbsencesExcelHisto();

        $obj->setTypeAbsCp("typeAbsCp");
        $this->assertEquals("typeAbsCp", $obj->getTypeAbsCp());
    }

    /**
     * Tests the setTypeAbsCpCorr() method.
     *
     * @return void
     */
    public function testSetTypeAbsCpCorr() {

        $obj = new AbsencesExcelHisto();

        $obj->setTypeAbsCpCorr("typeAbsCpCorr");
        $this->assertEquals("typeAbsCpCorr", $obj->getTypeAbsCpCorr());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new AbsencesExcelHisto();

        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getNbhSais());
        $this->assertNull($obj->getNbhSaisCorr());
        $this->assertNull($obj->getNbjSais());
        $this->assertNull($obj->getNbjSaisCorr());
        $this->assertNull($obj->getNumEvenement());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPerPaie());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeDebCorr());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getPeriodeFinCorr());
        $this->assertNull($obj->getTransfertAbs());
        $this->assertNull($obj->getTypeAbsCp());
        $this->assertNull($obj->getTypeAbsCpCorr());
    }
}
