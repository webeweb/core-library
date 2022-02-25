<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\CartesAppelEtebac;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Cartes appel etebac test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class CartesAppelEtebacTest extends AbstractTestCase {

    /**
     * Tests setCarteAppel()
     *
     * @return void
     */
    public function testSetCarteAppel(): void {

        $obj = new CartesAppelEtebac();

        $obj->setCarteAppel("carteAppel");
        $this->assertEquals("carteAppel", $obj->getCarteAppel());
    }

    /**
     * Tests setCodeBanque()
     *
     * @return void
     */
    public function testSetCodeBanque(): void {

        $obj = new CartesAppelEtebac();

        $obj->setCodeBanque("codeBanque");
        $this->assertEquals("codeBanque", $obj->getCodeBanque());
    }

    /**
     * Tests setIdCarte()
     *
     * @return void
     */
    public function testSetIdCarte(): void {

        $obj = new CartesAppelEtebac();

        $obj->setIdCarte("idCarte");
        $this->assertEquals("idCarte", $obj->getIdCarte());
    }

    /**
     * Tests setLgCarteAppel()
     *
     * @return void
     */
    public function testSetLgCarteAppel(): void {

        $obj = new CartesAppelEtebac();

        $obj->setLgCarteAppel("lgCarteAppel");
        $this->assertEquals("lgCarteAppel", $obj->getLgCarteAppel());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new CartesAppelEtebac();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setTypeCarte()
     *
     * @return void
     */
    public function testSetTypeCarte(): void {

        $obj = new CartesAppelEtebac();

        $obj->setTypeCarte("typeCarte");
        $this->assertEquals("typeCarte", $obj->getTypeCarte());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CartesAppelEtebac();

        $this->assertNull($obj->getCarteAppel());
        $this->assertNull($obj->getCodeBanque());
        $this->assertNull($obj->getIdCarte());
        $this->assertNull($obj->getLgCarteAppel());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getTypeCarte());
    }
}
