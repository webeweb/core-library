<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Vehicules;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Vehicules model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class VehiculesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Vehicules();

        $this->assertNull($obj->getCategorie());
        $this->assertNull($obj->getDateCession());
        $this->assertNull($obj->getDateImmat());
        $this->assertNull($obj->getDatePMEC());
        $this->assertNull($obj->getGUID());
        $this->assertNull($obj->getHybride());
        $this->assertNull($obj->getImmatriculation());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLienCompta());
        $this->assertNull($obj->getNonPolluant());
        $this->assertNull($obj->getPuissanceCV());
        $this->assertNull($obj->getSuperCarbu());
        $this->assertNull($obj->getTauxEmissionCO2());
        $this->assertNull($obj->getUsageAgricole());
    }

    /**
     * Tests the setCategorie() method.
     *
     * @return void
     */
    public function testSetCategorie() {

        $obj = new Vehicules();

        $obj->setCategorie("categorie");
        $this->assertEquals("categorie", $obj->getCategorie());
    }

    /**
     * Tests the setDateCession() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCession() {

        $obj = new Vehicules();

        $obj->setDateCession(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCession());
    }

    /**
     * Tests the setDateImmat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateImmat() {

        $obj = new Vehicules();

        $obj->setDateImmat(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateImmat());
    }

    /**
     * Tests the setDatePMEC() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePMEC() {

        $obj = new Vehicules();

        $obj->setDatePMEC(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePMEC());
    }

    /**
     * Tests the setGUID() method.
     *
     * @return void
     */
    public function testSetGUID() {

        $obj = new Vehicules();

        $obj->setGUID("gUID");
        $this->assertEquals("gUID", $obj->getGUID());
    }

    /**
     * Tests the setHybride() method.
     *
     * @return void
     */
    public function testSetHybride() {

        $obj = new Vehicules();

        $obj->setHybride(true);
        $this->assertEquals(true, $obj->getHybride());
    }

    /**
     * Tests the setImmatriculation() method.
     *
     * @return void
     */
    public function testSetImmatriculation() {

        $obj = new Vehicules();

        $obj->setImmatriculation("immatriculation");
        $this->assertEquals("immatriculation", $obj->getImmatriculation());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new Vehicules();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLienCompta() method.
     *
     * @return void
     */
    public function testSetLienCompta() {

        $obj = new Vehicules();

        $obj->setLienCompta(true);
        $this->assertEquals(true, $obj->getLienCompta());
    }

    /**
     * Tests the setNonPolluant() method.
     *
     * @return void
     */
    public function testSetNonPolluant() {

        $obj = new Vehicules();

        $obj->setNonPolluant(true);
        $this->assertEquals(true, $obj->getNonPolluant());
    }

    /**
     * Tests the setPuissanceCV() method.
     *
     * @return void
     */
    public function testSetPuissanceCV() {

        $obj = new Vehicules();

        $obj->setPuissanceCV(10);
        $this->assertEquals(10, $obj->getPuissanceCV());
    }

    /**
     * Tests the setSuperCarbu() method.
     *
     * @return void
     */
    public function testSetSuperCarbu() {

        $obj = new Vehicules();

        $obj->setSuperCarbu(true);
        $this->assertEquals(true, $obj->getSuperCarbu());
    }

    /**
     * Tests the setTauxEmissionCO2() method.
     *
     * @return void
     */
    public function testSetTauxEmissionCO2() {

        $obj = new Vehicules();

        $obj->setTauxEmissionCO2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEmissionCO2());
    }

    /**
     * Tests the setUsageAgricole() method.
     *
     * @return void
     */
    public function testSetUsageAgricole() {

        $obj = new Vehicules();

        $obj->setUsageAgricole(true);
        $this->assertEquals(true, $obj->getUsageAgricole());
    }
}
