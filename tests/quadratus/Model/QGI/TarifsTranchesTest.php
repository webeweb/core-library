<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\TarifsTranches;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Tarifs tranches test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class TarifsTranchesTest extends AbstractTestCase {

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new TarifsTranches();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new TarifsTranches();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new TarifsTranches();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setCodeNature() method.
     *
     * @return void
     */
    public function testSetCodeNature(): void {

        $obj = new TarifsTranches();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests the setCoeff() method.
     *
     * @return void
     */
    public function testSetCoeff(): void {

        $obj = new TarifsTranches();

        $obj->setCoeff(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeff());
    }

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut(): void {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new TarifsTranches();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin(): void {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new TarifsTranches();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Tests the setNumTranche() method.
     *
     * @return void
     */
    public function testSetNumTranche(): void {

        $obj = new TarifsTranches();

        $obj->setNumTranche("numTranche");
        $this->assertEquals("numTranche", $obj->getNumTranche());
    }

    /**
     * Tests the setPrixNet() method.
     *
     * @return void
     */
    public function testSetPrixNet(): void {

        $obj = new TarifsTranches();

        $obj->setPrixNet(true);
        $this->assertEquals(true, $obj->getPrixNet());
    }

    /**
     * Tests the setPrixUnit() method.
     *
     * @return void
     */
    public function testSetPrixUnit(): void {

        $obj = new TarifsTranches();

        $obj->setPrixUnit(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixUnit());
    }

    /**
     * Tests the setQteMini() method.
     *
     * @return void
     */
    public function testSetQteMini(): void {

        $obj = new TarifsTranches();

        $obj->setQteMini(10.092018);
        $this->assertEquals(10.092018, $obj->getQteMini());
    }

    /**
     * Tests the setTypeCodeArticle() method.
     *
     * @return void
     */
    public function testSetTypeCodeArticle(): void {

        $obj = new TarifsTranches();

        $obj->setTypeCodeArticle("typeCodeArticle");
        $this->assertEquals("typeCodeArticle", $obj->getTypeCodeArticle());
    }

    /**
     * Tests the setTypeCodeClient() method.
     *
     * @return void
     */
    public function testSetTypeCodeClient(): void {

        $obj = new TarifsTranches();

        $obj->setTypeCodeClient("typeCodeClient");
        $this->assertEquals("typeCodeClient", $obj->getTypeCodeClient());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TarifsTranches();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getCoeff());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getNumTranche());
        $this->assertNull($obj->getPrixNet());
        $this->assertNull($obj->getPrixUnit());
        $this->assertNull($obj->getQteMini());
        $this->assertNull($obj->getTypeCodeArticle());
        $this->assertNull($obj->getTypeCodeClient());
    }
}
