<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Vehicules;

/**
 * Vehicules test.
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
    public function test__construct() {

        $obj = new Vehicules();

        $this->assertNull($obj->getCategorie());
        $this->assertNull($obj->getDateCession());
        $this->assertNull($obj->getDateImmat());
        $this->assertNull($obj->getDatePmec());
        $this->assertNull($obj->getGuid());
        $this->assertNull($obj->getHybride());
        $this->assertNull($obj->getImmatriculation());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLienCompta());
        $this->assertNull($obj->getNonPolluant());
        $this->assertNull($obj->getPuissanceCv());
        $this->assertNull($obj->getSuperCarbu());
        $this->assertNull($obj->getTauxEmissionCo2());
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

        // Set a Date/time mock.
        $dateCession = new DateTime("2018-09-10");

        $obj = new Vehicules();

        $obj->setDateCession($dateCession);
        $this->assertSame($dateCession, $obj->getDateCession());
    }

    /**
     * Tests the setDateImmat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateImmat() {

        // Set a Date/time mock.
        $dateImmat = new DateTime("2018-09-10");

        $obj = new Vehicules();

        $obj->setDateImmat($dateImmat);
        $this->assertSame($dateImmat, $obj->getDateImmat());
    }

    /**
     * Tests the setDatePmec() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePmec() {

        // Set a Date/time mock.
        $datePmec = new DateTime("2018-09-10");

        $obj = new Vehicules();

        $obj->setDatePmec($datePmec);
        $this->assertSame($datePmec, $obj->getDatePmec());
    }

    /**
     * Tests the setGuid() method.
     *
     * @return void
     */
    public function testSetGuid() {

        $obj = new Vehicules();

        $obj->setGuid("guid");
        $this->assertEquals("guid", $obj->getGuid());
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
     * Tests the setPuissanceCv() method.
     *
     * @return void
     */
    public function testSetPuissanceCv() {

        $obj = new Vehicules();

        $obj->setPuissanceCv(10);
        $this->assertEquals(10, $obj->getPuissanceCv());
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
     * Tests the setTauxEmissionCo2() method.
     *
     * @return void
     */
    public function testSetTauxEmissionCo2() {

        $obj = new Vehicules();

        $obj->setTauxEmissionCo2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEmissionCo2());
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
