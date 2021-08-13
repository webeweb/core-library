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

use WBW\Library\Quadratus\Model\QCompta\ChargesARepartirLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Charges a repartir lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ChargesARepartirLignesTest extends AbstractTestCase {

    /**
     * Tests the setAnnee() method.
     *
     * @return void
     */
    public function testSetAnnee(): void {

        $obj = new ChargesARepartirLignes();

        $obj->setAnnee("annee");
        $this->assertEquals("annee", $obj->getAnnee());
    }

    /**
     * Tests the setMontantRestant() method.
     *
     * @return void
     */
    public function testSetMontantRestant(): void {

        $obj = new ChargesARepartirLignes();

        $obj->setMontantRestant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantRestant());
    }

    /**
     * Tests the setMontantVir() method.
     *
     * @return void
     */
    public function testSetMontantVir(): void {

        $obj = new ChargesARepartirLignes();

        $obj->setMontantVir(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantVir());
    }

    /**
     * Tests the setNumContrat() method.
     *
     * @return void
     */
    public function testSetNumContrat(): void {

        $obj = new ChargesARepartirLignes();

        $obj->setNumContrat("numContrat");
        $this->assertEquals("numContrat", $obj->getNumContrat());
    }

    /**
     * Tests the setNumCptCar() method.
     *
     * @return void
     */
    public function testSetNumCptCar(): void {

        $obj = new ChargesARepartirLignes();

        $obj->setNumCptCar("numCptCar");
        $this->assertEquals("numCptCar", $obj->getNumCptCar());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new ChargesARepartirLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChargesARepartirLignes();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getMontantRestant());
        $this->assertNull($obj->getMontantVir());
        $this->assertNull($obj->getNumContrat());
        $this->assertNull($obj->getNumCptCar());
        $this->assertNull($obj->getNumLigne());
    }
}
