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

use WBW\Library\Quadratus\Model\QPaie\EmployesProprete;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Employes proprete test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmployesPropreteTest extends AbstractTestCase {

    /**
     * Tests setControleur()
     *
     * @return void
     */
    public function testSetControleur(): void {

        $obj = new EmployesProprete();

        $obj->setControleur(true);
        $this->assertEquals(true, $obj->getControleur());
    }

    /**
     * Tests setHotellerie()
     *
     * @return void
     */
    public function testSetHotellerie(): void {

        $obj = new EmployesProprete();

        $obj->setHotellerie(true);
        $this->assertEquals(true, $obj->getHotellerie());
    }

    /**
     * Tests setLivreur()
     *
     * @return void
     */
    public function testSetLivreur(): void {

        $obj = new EmployesProprete();

        $obj->setLivreur(true);
        $this->assertEquals(true, $obj->getLivreur());
    }

    /**
     * Tests setModulation()
     *
     * @return void
     */
    public function testSetModulation(): void {

        $obj = new EmployesProprete();

        $obj->setModulation(true);
        $this->assertEquals(true, $obj->getModulation());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new EmployesProprete();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setPolyvalent()
     *
     * @return void
     */
    public function testSetPolyvalent(): void {

        $obj = new EmployesProprete();

        $obj->setPolyvalent(true);
        $this->assertEquals(true, $obj->getPolyvalent());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmployesProprete();

        $this->assertNull($obj->getControleur());
        $this->assertNull($obj->getHotellerie());
        $this->assertNull($obj->getLivreur());
        $this->assertNull($obj->getModulation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPolyvalent());
    }
}
