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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\AbsencesExcel;

/**
 * Absences excel test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AbsencesExcelTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setId() method.
     *
     * @return void
     */
    public function testSetId() {

        $obj = new AbsencesExcel();

        $obj->setId(10);
        $this->assertEquals(10, $obj->getId());
    }

    /**
     * Tests the setNbhSais() method.
     *
     * @return void
     */
    public function testSetNbhSais() {

        $obj = new AbsencesExcel();

        $obj->setNbhSais(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhSais());
    }

    /**
     * Tests the setNbjSais() method.
     *
     * @return void
     */
    public function testSetNbjSais() {

        $obj = new AbsencesExcel();

        $obj->setNbjSais(10.092018);
        $this->assertEquals(10.092018, $obj->getNbjSais());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new AbsencesExcel();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
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

        $obj = new AbsencesExcel();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
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

        $obj = new AbsencesExcel();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Tests the setTypeAbsCp() method.
     *
     * @return void
     */
    public function testSetTypeAbsCp() {

        $obj = new AbsencesExcel();

        $obj->setTypeAbsCp("typeAbsCp");
        $this->assertEquals("typeAbsCp", $obj->getTypeAbsCp());
    }

    /**
     * Tests the setTypeImport() method.
     *
     * @return void
     */
    public function testSetTypeImport() {

        $obj = new AbsencesExcel();

        $obj->setTypeImport(10);
        $this->assertEquals(10, $obj->getTypeImport());
    }
}
