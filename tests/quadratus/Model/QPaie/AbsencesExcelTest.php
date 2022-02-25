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
use WBW\Library\Quadratus\Model\QPaie\AbsencesExcel;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Absences excel test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class AbsencesExcelTest extends AbstractTestCase {

    /**
     * Tests setId()
     *
     * @return void
     */
    public function testSetId(): void {

        $obj = new AbsencesExcel();

        $obj->setId(10);
        $this->assertEquals(10, $obj->getId());
    }

    /**
     * Tests setNbhSais()
     *
     * @return void
     */
    public function testSetNbhSais(): void {

        $obj = new AbsencesExcel();

        $obj->setNbhSais(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhSais());
    }

    /**
     * Tests setNbjSais()
     *
     * @return void
     */
    public function testSetNbjSais(): void {

        $obj = new AbsencesExcel();

        $obj->setNbjSais(10.092018);
        $this->assertEquals(10.092018, $obj->getNbjSais());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new AbsencesExcel();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
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

        $obj = new AbsencesExcel();

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

        $obj = new AbsencesExcel();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Tests setTypeAbsCp()
     *
     * @return void
     */
    public function testSetTypeAbsCp(): void {

        $obj = new AbsencesExcel();

        $obj->setTypeAbsCp("typeAbsCp");
        $this->assertEquals("typeAbsCp", $obj->getTypeAbsCp());
    }

    /**
     * Tests setTypeImport()
     *
     * @return void
     */
    public function testSetTypeImport(): void {

        $obj = new AbsencesExcel();

        $obj->setTypeImport(10);
        $this->assertEquals(10, $obj->getTypeImport());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AbsencesExcel();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getNbhSais());
        $this->assertNull($obj->getNbjSais());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getTypeAbsCp());
        $this->assertNull($obj->getTypeImport());
    }
}
