<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\DevisZbe;

/**
 * Devis zbe test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class DevisZbeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new DevisZbe();

        $this->assertNull($obj->getBatiment());
        $this->assertNull($obj->getEtage());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getZoneGeographique());
    }

    /**
     * Tests the setBatiment() method.
     *
     * @return void
     */
    public function testSetBatiment() {

        $obj = new DevisZbe();

        $obj->setBatiment("batiment");
        $this->assertEquals("batiment", $obj->getBatiment());
    }

    /**
     * Tests the setEtage() method.
     *
     * @return void
     */
    public function testSetEtage() {

        $obj = new DevisZbe();

        $obj->setEtage("etage");
        $this->assertEquals("etage", $obj->getEtage());
    }

    /**
     * Tests the setNumDevis() method.
     *
     * @return void
     */
    public function testSetNumDevis() {

        $obj = new DevisZbe();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Tests the setZoneGeographique() method.
     *
     * @return void
     */
    public function testSetZoneGeographique() {

        $obj = new DevisZbe();

        $obj->setZoneGeographique("zoneGeographique");
        $this->assertEquals("zoneGeographique", $obj->getZoneGeographique());
    }
}
