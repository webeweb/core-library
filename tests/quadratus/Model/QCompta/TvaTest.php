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

use WBW\Library\Quadratus\Model\QCompta\Tva;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Tva test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class TvaTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Tva();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCompteTvaAchat()
     *
     * @return void
     */
    public function testSetCompteTvaAchat(): void {

        $obj = new Tva();

        $obj->setCompteTvaAchat("compteTvaAchat");
        $this->assertEquals("compteTvaAchat", $obj->getCompteTvaAchat());
    }

    /**
     * Tests setCompteTvaImmo()
     *
     * @return void
     */
    public function testSetCompteTvaImmo(): void {

        $obj = new Tva();

        $obj->setCompteTvaImmo("compteTvaImmo");
        $this->assertEquals("compteTvaImmo", $obj->getCompteTvaImmo());
    }

    /**
     * Tests setCompteTvaVente()
     *
     * @return void
     */
    public function testSetCompteTvaVente(): void {

        $obj = new Tva();

        $obj->setCompteTvaVente("compteTvaVente");
        $this->assertEquals("compteTvaVente", $obj->getCompteTvaVente());
    }

    /**
     * Tests setCompteVentilation()
     *
     * @return void
     */
    public function testSetCompteVentilation(): void {

        $obj = new Tva();

        $obj->setCompteVentilation("compteVentilation");
        $this->assertEquals("compteVentilation", $obj->getCompteVentilation());
    }

    /**
     * Tests setTauxTva()
     *
     * @return void
     */
    public function testSetTauxTva(): void {

        $obj = new Tva();

        $obj->setTauxTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva());
    }

    /**
     * Tests setTypeAutoliquidation()
     *
     * @return void
     */
    public function testSetTypeAutoliquidation(): void {

        $obj = new Tva();

        $obj->setTypeAutoliquidation("typeAutoliquidation");
        $this->assertEquals("typeAutoliquidation", $obj->getTypeAutoliquidation());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Tva();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCompteTvaAchat());
        $this->assertNull($obj->getCompteTvaImmo());
        $this->assertNull($obj->getCompteTvaVente());
        $this->assertNull($obj->getCompteVentilation());
        $this->assertNull($obj->getTauxTva());
        $this->assertNull($obj->getTypeAutoliquidation());
    }
}
