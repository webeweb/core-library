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
use WBW\Library\Quadratus\Model\QPaie\DadsuPrevoyanceEntete;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dadsu prevoyance entete test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DadsuPrevoyanceEnteteTest extends AbstractTestCase {

    /**
     * Tests setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new DadsuPrevoyanceEntete();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests setCodePeriodicite()
     *
     * @return void
     */
    public function testSetCodePeriodicite(): void {

        $obj = new DadsuPrevoyanceEntete();

        $obj->setCodePeriodicite("codePeriodicite");
        $this->assertEquals("codePeriodicite", $obj->getCodePeriodicite());
    }

    /**
     * Tests setDateApplication()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication(): void {

        // Set a Date/time mock.
        $dateApplication = new DateTime("2018-09-10");

        $obj = new DadsuPrevoyanceEntete();

        $obj->setDateApplication($dateApplication);
        $this->assertSame($dateApplication, $obj->getDateApplication());
    }

    /**
     * Tests setDateEmission()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEmission(): void {

        // Set a Date/time mock.
        $dateEmission = new DateTime("2018-09-10");

        $obj = new DadsuPrevoyanceEntete();

        $obj->setDateEmission($dateEmission);
        $this->assertSame($dateEmission, $obj->getDateEmission());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new DadsuPrevoyanceEntete();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setMailContact()
     *
     * @return void
     */
    public function testSetMailContact(): void {

        $obj = new DadsuPrevoyanceEntete();

        $obj->setMailContact("mailContact");
        $this->assertEquals("mailContact", $obj->getMailContact());
    }

    /**
     * Tests setMoisAnniv()
     *
     * @return void
     */
    public function testSetMoisAnniv(): void {

        $obj = new DadsuPrevoyanceEntete();

        $obj->setMoisAnniv("moisAnniv");
        $this->assertEquals("moisAnniv", $obj->getMoisAnniv());
    }

    /**
     * Tests setNomContact()
     *
     * @return void
     */
    public function testSetNomContact(): void {

        $obj = new DadsuPrevoyanceEntete();

        $obj->setNomContact("nomContact");
        $this->assertEquals("nomContact", $obj->getNomContact());
    }

    /**
     * Tests setTelContact()
     *
     * @return void
     */
    public function testSetTelContact(): void {

        $obj = new DadsuPrevoyanceEntete();

        $obj->setTelContact("telContact");
        $this->assertEquals("telContact", $obj->getTelContact());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DadsuPrevoyanceEntete();

        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodePeriodicite());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDateEmission());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMailContact());
        $this->assertNull($obj->getMoisAnniv());
        $this->assertNull($obj->getNomContact());
        $this->assertNull($obj->getTelContact());
    }
}
