<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\DevisZbe;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Devis zbe test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DevisZbeTest extends AbstractTestCase {

    /**
     * Tests setBatiment()
     *
     * @return void
     */
    public function testSetBatiment(): void {

        $obj = new DevisZbe();

        $obj->setBatiment("batiment");
        $this->assertEquals("batiment", $obj->getBatiment());
    }

    /**
     * Tests setEtage()
     *
     * @return void
     */
    public function testSetEtage(): void {

        $obj = new DevisZbe();

        $obj->setEtage("etage");
        $this->assertEquals("etage", $obj->getEtage());
    }

    /**
     * Tests setNumDevis()
     *
     * @return void
     */
    public function testSetNumDevis(): void {

        $obj = new DevisZbe();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Tests setZoneGeographique()
     *
     * @return void
     */
    public function testSetZoneGeographique(): void {

        $obj = new DevisZbe();

        $obj->setZoneGeographique("zoneGeographique");
        $this->assertEquals("zoneGeographique", $obj->getZoneGeographique());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DevisZbe();

        $this->assertNull($obj->getBatiment());
        $this->assertNull($obj->getEtage());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getZoneGeographique());
    }
}
