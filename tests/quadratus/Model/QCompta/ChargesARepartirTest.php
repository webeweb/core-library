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
use WBW\Library\Quadratus\Model\QCompta\ChargesARepartir;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Charges a repartir test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ChargesARepartirTest extends AbstractTestCase {

    /**
     * Tests setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new ChargesARepartir();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests setCoeffDegressif()
     *
     * @return void
     */
    public function testSetCoeffDegressif(): void {

        $obj = new ChargesARepartir();

        $obj->setCoeffDegressif(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffDegressif());
    }

    /**
     * Tests setDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate(): void {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new ChargesARepartir();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests setDuree()
     *
     * @return void
     */
    public function testSetDuree(): void {

        $obj = new ChargesARepartir();

        $obj->setDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getDuree());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ChargesARepartir();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new ChargesARepartir();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests setNumContrat()
     *
     * @return void
     */
    public function testSetNumContrat(): void {

        $obj = new ChargesARepartir();

        $obj->setNumContrat("numContrat");
        $this->assertEquals("numContrat", $obj->getNumContrat());
    }

    /**
     * Tests setNumCptCar()
     *
     * @return void
     */
    public function testSetNumCptCar(): void {

        $obj = new ChargesARepartir();

        $obj->setNumCptCar("numCptCar");
        $this->assertEquals("numCptCar", $obj->getNumCptCar());
    }

    /**
     * Tests setNumeroPj()
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new ChargesARepartir();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests setTauxLineaire()
     *
     * @return void
     */
    public function testSetTauxLineaire(): void {

        $obj = new ChargesARepartir();

        $obj->setTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxLineaire());
    }

    /**
     * Tests setTypeAmort()
     *
     * @return void
     */
    public function testSetTypeAmort(): void {

        $obj = new ChargesARepartir();

        $obj->setTypeAmort("typeAmort");
        $this->assertEquals("typeAmort", $obj->getTypeAmort());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChargesARepartir();

        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCoeffDegressif());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNumContrat());
        $this->assertNull($obj->getNumCptCar());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getTauxLineaire());
        $this->assertNull($obj->getTypeAmort());
    }
}
