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
use WBW\Library\Core\Quadratus\Model\QPaie\AbsencesExcelHisto;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Absences excel histo model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class AbsencesExcelHistoTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AbsencesExcelHisto();

        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getID());
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

    /**
     * Tests the setDateAdded() method.
     *
     * @return void
     */
    public function testSetDateAdded() {

        $obj = new AbsencesExcelHisto();

        $obj->setDateAdded(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAdded());
    }

    /**
     * Tests the setID() method.
     *
     * @return void
     */
    public function testSetID() {

        $obj = new AbsencesExcelHisto();

        $obj->setID("iD");
        $this->assertEquals("iD", $obj->getID());
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
     */
    public function testSetPerPaie() {

        $obj = new AbsencesExcelHisto();

        $obj->setPerPaie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerPaie());
    }

    /**
     * Tests the setPeriodeDeb() method.
     *
     * @return void
     */
    public function testSetPeriodeDeb() {

        $obj = new AbsencesExcelHisto();

        $obj->setPeriodeDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDeb());
    }

    /**
     * Tests the setPeriodeDebCorr() method.
     *
     * @return void
     */
    public function testSetPeriodeDebCorr() {

        $obj = new AbsencesExcelHisto();

        $obj->setPeriodeDebCorr(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDebCorr());
    }

    /**
     * Tests the setPeriodeFin() method.
     *
     * @return void
     */
    public function testSetPeriodeFin() {

        $obj = new AbsencesExcelHisto();

        $obj->setPeriodeFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeFin());
    }

    /**
     * Tests the setPeriodeFinCorr() method.
     *
     * @return void
     */
    public function testSetPeriodeFinCorr() {

        $obj = new AbsencesExcelHisto();

        $obj->setPeriodeFinCorr(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeFinCorr());
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

}
