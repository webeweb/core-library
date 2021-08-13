<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\Historique;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Historique test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class HistoriqueTest extends AbstractTestCase {

    /**
     * Tests the setAnnees() method.
     *
     * @return void
     */
    public function testSetAnnees(): void {

        $obj = new Historique();

        $obj->setAnnees(10);
        $this->assertEquals(10, $obj->getAnnees());
    }

    /**
     * Tests the setAnneesPlus() method.
     *
     * @return void
     */
    public function testSetAnneesPlus(): void {

        $obj = new Historique();

        $obj->setAnneesPlus(10);
        $this->assertEquals(10, $obj->getAnneesPlus());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new Historique();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCsValide() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCsValide(): void {

        // Set a Date/time mock.
        $csValide = new DateTime("2018-09-10");

        $obj = new Historique();

        $obj->setCsValide($csValide);
        $this->assertSame($csValide, $obj->getCsValide());
    }

    /**
     * Tests the setCtValide() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCtValide(): void {

        // Set a Date/time mock.
        $ctValide = new DateTime("2018-09-10");

        $obj = new Historique();

        $obj->setCtValide($ctValide);
        $this->assertSame($ctValide, $obj->getCtValide());
    }

    /**
     * Tests the setRub() method.
     *
     * @return void
     */
    public function testSetRub(): void {

        $obj = new Historique();

        $obj->setRub("rub");
        $this->assertEquals("rub", $obj->getRub());
    }

    /**
     * Tests the setService() method.
     *
     * @return void
     */
    public function testSetService(): void {

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
    public function testSetVisiteMedicale(): void {

        // Set a Date/time mock.
        $visiteMedicale = new DateTime("2018-09-10");

        $obj = new Historique();

        $obj->setVisiteMedicale($visiteMedicale);
        $this->assertSame($visiteMedicale, $obj->getVisiteMedicale());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Historique();

        $this->assertNull($obj->getAnnees());
        $this->assertNull($obj->getAnneesPlus());
        $this->assertNull($obj->getCsValide());
        $this->assertNull($obj->getCtValide());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getRub());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getVisiteMedicale());
    }
}
