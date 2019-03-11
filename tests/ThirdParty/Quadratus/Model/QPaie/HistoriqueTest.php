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
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Historique;

/**
 * Historique model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class HistoriqueTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Historique();

        $this->assertNull($obj->getAnnees());
        $this->assertNull($obj->getAnneesPlus());
        $this->assertNull($obj->getCSValide());
        $this->assertNull($obj->getCTValide());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getRub());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getVisiteMedicale());
    }

    /**
     * Tests the setAnnees() method.
     *
     * @return void
     */
    public function testSetAnnees() {

        $obj = new Historique();

        $obj->setAnnees(10);
        $this->assertEquals(10, $obj->getAnnees());
    }

    /**
     * Tests the setAnneesPlus() method.
     *
     * @return void
     */
    public function testSetAnneesPlus() {

        $obj = new Historique();

        $obj->setAnneesPlus(10);
        $this->assertEquals(10, $obj->getAnneesPlus());
    }

    /**
     * Tests the setCSValide() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCSValide() {

        $obj = new Historique();

        $obj->setCSValide(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getCSValide());
    }

    /**
     * Tests the setCTValide() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCTValide() {

        $obj = new Historique();

        $obj->setCTValide(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getCTValide());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new Historique();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setRub() method.
     *
     * @return void
     */
    public function testSetRub() {

        $obj = new Historique();

        $obj->setRub("rub");
        $this->assertEquals("rub", $obj->getRub());
    }

    /**
     * Tests the setService() method.
     *
     * @return void
     */
    public function testSetService() {

        $obj = new Historique();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests the setVisiteMedicale() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetVisiteMedicale() {

        $obj = new Historique();

        $obj->setVisiteMedicale(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getVisiteMedicale());
    }
}
