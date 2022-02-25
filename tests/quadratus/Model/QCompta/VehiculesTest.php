<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\Vehicules;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Vehicules test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class VehiculesTest extends AbstractTestCase {

    /**
     * Tests setCategorie()
     *
     * @return void
     */
    public function testSetCategorie(): void {

        $obj = new Vehicules();

        $obj->setCategorie("categorie");
        $this->assertEquals("categorie", $obj->getCategorie());
    }

    /**
     * Tests setDateCession()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCession(): void {

        // Set a Date/time mock.
        $dateCession = new DateTime("2018-09-10");

        $obj = new Vehicules();

        $obj->setDateCession($dateCession);
        $this->assertSame($dateCession, $obj->getDateCession());
    }

    /**
     * Tests setDateImmat()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateImmat(): void {

        // Set a Date/time mock.
        $dateImmat = new DateTime("2018-09-10");

        $obj = new Vehicules();

        $obj->setDateImmat($dateImmat);
        $this->assertSame($dateImmat, $obj->getDateImmat());
    }

    /**
     * Tests setDatePmec()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePmec(): void {

        // Set a Date/time mock.
        $datePmec = new DateTime("2018-09-10");

        $obj = new Vehicules();

        $obj->setDatePmec($datePmec);
        $this->assertSame($datePmec, $obj->getDatePmec());
    }

    /**
     * Tests setGuid()
     *
     * @return void
     */
    public function testSetGuid(): void {

        $obj = new Vehicules();

        $obj->setGuid("guid");
        $this->assertEquals("guid", $obj->getGuid());
    }

    /**
     * Tests setHybride()
     *
     * @return void
     */
    public function testSetHybride(): void {

        $obj = new Vehicules();

        $obj->setHybride(true);
        $this->assertEquals(true, $obj->getHybride());
    }

    /**
     * Tests setImmatriculation()
     *
     * @return void
     */
    public function testSetImmatriculation(): void {

        $obj = new Vehicules();

        $obj->setImmatriculation("immatriculation");
        $this->assertEquals("immatriculation", $obj->getImmatriculation());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Vehicules();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setLienCompta()
     *
     * @return void
     */
    public function testSetLienCompta(): void {

        $obj = new Vehicules();

        $obj->setLienCompta(true);
        $this->assertEquals(true, $obj->getLienCompta());
    }

    /**
     * Tests setNonPolluant()
     *
     * @return void
     */
    public function testSetNonPolluant(): void {

        $obj = new Vehicules();

        $obj->setNonPolluant(true);
        $this->assertEquals(true, $obj->getNonPolluant());
    }

    /**
     * Tests setPuissanceCv()
     *
     * @return void
     */
    public function testSetPuissanceCv(): void {

        $obj = new Vehicules();

        $obj->setPuissanceCv(10);
        $this->assertEquals(10, $obj->getPuissanceCv());
    }

    /**
     * Tests setSuperCarbu()
     *
     * @return void
     */
    public function testSetSuperCarbu(): void {

        $obj = new Vehicules();

        $obj->setSuperCarbu(true);
        $this->assertEquals(true, $obj->getSuperCarbu());
    }

    /**
     * Tests setTauxEmissionCo2()
     *
     * @return void
     */
    public function testSetTauxEmissionCo2(): void {

        $obj = new Vehicules();

        $obj->setTauxEmissionCo2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEmissionCo2());
    }

    /**
     * Tests setUsageAgricole()
     *
     * @return void
     */
    public function testSetUsageAgricole(): void {

        $obj = new Vehicules();

        $obj->setUsageAgricole(true);
        $this->assertEquals(true, $obj->getUsageAgricole());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
