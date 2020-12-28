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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Tva;

/**
 * Tva test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class TvaTest extends AbstractTestCase {

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Tva();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCompteTvaAchat() method.
     *
     * @return void
     */
    public function testSetCompteTvaAchat(): void {

        $obj = new Tva();

        $obj->setCompteTvaAchat("compteTvaAchat");
        $this->assertEquals("compteTvaAchat", $obj->getCompteTvaAchat());
    }

    /**
     * Tests the setCompteTvaImmo() method.
     *
     * @return void
     */
    public function testSetCompteTvaImmo(): void {

        $obj = new Tva();

        $obj->setCompteTvaImmo("compteTvaImmo");
        $this->assertEquals("compteTvaImmo", $obj->getCompteTvaImmo());
    }

    /**
     * Tests the setCompteTvaVente() method.
     *
     * @return void
     */
    public function testSetCompteTvaVente(): void {

        $obj = new Tva();

        $obj->setCompteTvaVente("compteTvaVente");
        $this->assertEquals("compteTvaVente", $obj->getCompteTvaVente());
    }

    /**
     * Tests the setCompteVentilation() method.
     *
     * @return void
     */
    public function testSetCompteVentilation(): void {

        $obj = new Tva();

        $obj->setCompteVentilation("compteVentilation");
        $this->assertEquals("compteVentilation", $obj->getCompteVentilation());
    }

    /**
     * Tests the setTauxTva() method.
     *
     * @return void
     */
    public function testSetTauxTva(): void {

        $obj = new Tva();

        $obj->setTauxTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva());
    }

    /**
     * Tests the setTypeAutoliquidation() method.
     *
     * @return void
     */
    public function testSetTypeAutoliquidation(): void {

        $obj = new Tva();

        $obj->setTypeAutoliquidation("typeAutoliquidation");
        $this->assertEquals("typeAutoliquidation", $obj->getTypeAutoliquidation());
    }

    /**
     * Tests the __construct() method.
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
