<?php

declare(strict_types = 1);

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
use WBW\Library\Quadratus\Model\QPaie\AbsencesExcelHisto;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Absences excel histo test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class AbsencesExcelHistoTest extends AbstractTestCase {

    /**
     * Test setDateAdded()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAdded(): void {

        // Set a Date/time mock.
        $dateAdded = new DateTime("2018-09-10");

        $obj = new AbsencesExcelHisto();

        $obj->setDateAdded($dateAdded);
        $this->assertSame($dateAdded, $obj->getDateAdded());
    }

    /**
     * Test setId()
     *
     * @return void
     */
    public function testSetId(): void {

        $obj = new AbsencesExcelHisto();

        $obj->setId("id");
        $this->assertEquals("id", $obj->getId());
    }

    /**
     * Test setNbhSais()
     *
     * @return void
     */
    public function testSetNbhSais(): void {

        $obj = new AbsencesExcelHisto();

        $obj->setNbhSais(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhSais());
    }

    /**
     * Test setNbhSaisCorr()
     *
     * @return void
     */
    public function testSetNbhSaisCorr(): void {

        $obj = new AbsencesExcelHisto();

        $obj->setNbhSaisCorr(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhSaisCorr());
    }

    /**
     * Test setNbjSais()
     *
     * @return void
     */
    public function testSetNbjSais(): void {

        $obj = new AbsencesExcelHisto();

        $obj->setNbjSais(10.092018);
        $this->assertEquals(10.092018, $obj->getNbjSais());
    }

    /**
     * Test setNbjSaisCorr()
     *
     * @return void
     */
    public function testSetNbjSaisCorr(): void {

        $obj = new AbsencesExcelHisto();

        $obj->setNbjSaisCorr(10.092018);
        $this->assertEquals(10.092018, $obj->getNbjSaisCorr());
    }

    /**
     * Test setNumEvenement()
     *
     * @return void
     */
    public function testSetNumEvenement(): void {

        $obj = new AbsencesExcelHisto();

        $obj->setNumEvenement(10);
        $this->assertEquals(10, $obj->getNumEvenement());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new AbsencesExcelHisto();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setPerPaie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPerPaie(): void {

        // Set a Date/time mock.
        $perPaie = new DateTime("2018-09-10");

        $obj = new AbsencesExcelHisto();

        $obj->setPerPaie($perPaie);
        $this->assertSame($perPaie, $obj->getPerPaie());
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

        $obj = new AbsencesExcelHisto();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Test setPeriodeDebCorr()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeDebCorr(): void {

        // Set a Date/time mock.
        $periodeDebCorr = new DateTime("2018-09-10");

        $obj = new AbsencesExcelHisto();

        $obj->setPeriodeDebCorr($periodeDebCorr);
        $this->assertSame($periodeDebCorr, $obj->getPeriodeDebCorr());
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

        $obj = new AbsencesExcelHisto();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Test setPeriodeFinCorr()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeFinCorr(): void {

        // Set a Date/time mock.
        $periodeFinCorr = new DateTime("2018-09-10");

        $obj = new AbsencesExcelHisto();

        $obj->setPeriodeFinCorr($periodeFinCorr);
        $this->assertSame($periodeFinCorr, $obj->getPeriodeFinCorr());
    }

    /**
     * Test setTransfertAbs()
     *
     * @return void
     */
    public function testSetTransfertAbs(): void {

        $obj = new AbsencesExcelHisto();

        $obj->setTransfertAbs(true);
        $this->assertTrue($obj->getTransfertAbs());
    }

    /**
     * Test setTypeAbsCp()
     *
     * @return void
     */
    public function testSetTypeAbsCp(): void {

        $obj = new AbsencesExcelHisto();

        $obj->setTypeAbsCp("typeAbsCp");
        $this->assertEquals("typeAbsCp", $obj->getTypeAbsCp());
    }

    /**
     * Test setTypeAbsCpCorr()
     *
     * @return void
     */
    public function testSetTypeAbsCpCorr(): void {

        $obj = new AbsencesExcelHisto();

        $obj->setTypeAbsCpCorr("typeAbsCpCorr");
        $this->assertEquals("typeAbsCpCorr", $obj->getTypeAbsCpCorr());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
