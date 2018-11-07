<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\AbsencesExcel;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Absences excel model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class AbsencesExcelTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AbsencesExcel();

        $this->assertNull($obj->getID());
        $this->assertNull($obj->getNbhSais());
        $this->assertNull($obj->getNbjSais());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getTypeAbsCp());
        $this->assertNull($obj->getTypeImport());
    }

    /**
     * Tests the setID() method.
     *
     * @return void
     */
    public function testSetID() {

        $obj = new AbsencesExcel();

        $obj->setID(10);
        $this->assertEquals(10, $obj->getID());
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
     */
    public function testSetPeriodeDeb() {

        $obj = new AbsencesExcel();

        $obj->setPeriodeDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDeb());
    }

    /**
     * Tests the setPeriodeFin() method.
     *
     * @return void
     */
    public function testSetPeriodeFin() {

        $obj = new AbsencesExcel();

        $obj->setPeriodeFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeFin());
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
