<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\TarifsTranches;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Tarifs tranches model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class TarifsTranchesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new TarifsTranches();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new TarifsTranches();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise() {

        $obj = new TarifsTranches();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setCodeNature() method.
     *
     * @return void
     */
    public function testSetCodeNature() {

        $obj = new TarifsTranches();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests the setCoeff() method.
     *
     * @return void
     */
    public function testSetCoeff() {

        $obj = new TarifsTranches();

        $obj->setCoeff(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeff());
    }

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     */
    public function testSetDateDebut() {

        $obj = new TarifsTranches();

        $obj->setDateDebut(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebut());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     */
    public function testSetDateFin() {

        $obj = new TarifsTranches();

        $obj->setDateFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFin());
    }

    /**
     * Tests the setNumTranche() method.
     *
     * @return void
     */
    public function testSetNumTranche() {

        $obj = new TarifsTranches();

        $obj->setNumTranche("numTranche");
        $this->assertEquals("numTranche", $obj->getNumTranche());
    }

    /**
     * Tests the setPrixNet() method.
     *
     * @return void
     */
    public function testSetPrixNet() {

        $obj = new TarifsTranches();

        $obj->setPrixNet(true);
        $this->assertEquals(true, $obj->getPrixNet());
    }

    /**
     * Tests the setPrixUnit() method.
     *
     * @return void
     */
    public function testSetPrixUnit() {

        $obj = new TarifsTranches();

        $obj->setPrixUnit(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixUnit());
    }

    /**
     * Tests the setQteMini() method.
     *
     * @return void
     */
    public function testSetQteMini() {

        $obj = new TarifsTranches();

        $obj->setQteMini(10.092018);
        $this->assertEquals(10.092018, $obj->getQteMini());
    }

    /**
     * Tests the setTypeCodeArticle() method.
     *
     * @return void
     */
    public function testSetTypeCodeArticle() {

        $obj = new TarifsTranches();

        $obj->setTypeCodeArticle("typeCodeArticle");
        $this->assertEquals("typeCodeArticle", $obj->getTypeCodeArticle());
    }

    /**
     * Tests the setTypeCodeClient() method.
     *
     * @return void
     */
    public function testSetTypeCodeClient() {

        $obj = new TarifsTranches();

        $obj->setTypeCodeClient("typeCodeClient");
        $this->assertEquals("typeCodeClient", $obj->getTypeCodeClient());
    }

}
