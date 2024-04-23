<?php

declare(strict_types = 1);

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
     * Test setControleur()
     *
     * @return void
     */
    public function testSetControleur(): void {

        $obj = new EmployesProprete();

        $obj->setControleur(true);
        $this->assertTrue($obj->getControleur());
    }

    /**
     * Test setHotellerie()
     *
     * @return void
     */
    public function testSetHotellerie(): void {

        $obj = new EmployesProprete();

        $obj->setHotellerie(true);
        $this->assertTrue($obj->getHotellerie());
    }

    /**
     * Test setLivreur()
     *
     * @return void
     */
    public function testSetLivreur(): void {

        $obj = new EmployesProprete();

        $obj->setLivreur(true);
        $this->assertTrue($obj->getLivreur());
    }

    /**
     * Test setModulation()
     *
     * @return void
     */
    public function testSetModulation(): void {

        $obj = new EmployesProprete();

        $obj->setModulation(true);
        $this->assertTrue($obj->getModulation());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new EmployesProprete();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setPolyvalent()
     *
     * @return void
     */
    public function testSetPolyvalent(): void {

        $obj = new EmployesProprete();

        $obj->setPolyvalent(true);
        $this->assertTrue($obj->getPolyvalent());
    }

    /**
     * Test __construct()
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
