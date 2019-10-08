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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DADSUAssuranceEntete;

/**
 * D a d s u assurance entete model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DADSUAssuranceEnteteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DADSUAssuranceEntete();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodePeriodicite());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDateEmission());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMailContact());
        $this->assertNull($obj->getMoisAnniv());
        $this->assertNull($obj->getNomContact());
        $this->assertNull($obj->getTelContact());
        $this->assertNull($obj->getUniteGestion());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new DADSUAssuranceEntete();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new DADSUAssuranceEntete();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setCodePeriodicite() method.
     *
     * @return void
     */
    public function testSetCodePeriodicite() {

        $obj = new DADSUAssuranceEntete();

        $obj->setCodePeriodicite("codePeriodicite");
        $this->assertEquals("codePeriodicite", $obj->getCodePeriodicite());
    }

    /**
     * Tests the setDateApplication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication() {

        $obj = new DADSUAssuranceEntete();

        $obj->setDateApplication(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateApplication());
    }

    /**
     * Tests the setDateEmission() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEmission() {

        $obj = new DADSUAssuranceEntete();

        $obj->setDateEmission(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEmission());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new DADSUAssuranceEntete();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setMailContact() method.
     *
     * @return void
     */
    public function testSetMailContact() {

        $obj = new DADSUAssuranceEntete();

        $obj->setMailContact("mailContact");
        $this->assertEquals("mailContact", $obj->getMailContact());
    }

    /**
     * Tests the setMoisAnniv() method.
     *
     * @return void
     */
    public function testSetMoisAnniv() {

        $obj = new DADSUAssuranceEntete();

        $obj->setMoisAnniv("moisAnniv");
        $this->assertEquals("moisAnniv", $obj->getMoisAnniv());
    }

    /**
     * Tests the setNomContact() method.
     *
     * @return void
     */
    public function testSetNomContact() {

        $obj = new DADSUAssuranceEntete();

        $obj->setNomContact("nomContact");
        $this->assertEquals("nomContact", $obj->getNomContact());
    }

    /**
     * Tests the setTelContact() method.
     *
     * @return void
     */
    public function testSetTelContact() {

        $obj = new DADSUAssuranceEntete();

        $obj->setTelContact("telContact");
        $this->assertEquals("telContact", $obj->getTelContact());
    }

    /**
     * Tests the setUniteGestion() method.
     *
     * @return void
     */
    public function testSetUniteGestion() {

        $obj = new DADSUAssuranceEntete();

        $obj->setUniteGestion("uniteGestion");
        $this->assertEquals("uniteGestion", $obj->getUniteGestion());
    }
}
