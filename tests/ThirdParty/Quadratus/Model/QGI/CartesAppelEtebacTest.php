<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\CartesAppelEtebac;

/**
 * Cartes appel etebac test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class CartesAppelEtebacTest extends AbstractTestCase {

    /**
     * Tests the setCarteAppel() method.
     *
     * @return void
     */
    public function testSetCarteAppel(): void {

        $obj = new CartesAppelEtebac();

        $obj->setCarteAppel("carteAppel");
        $this->assertEquals("carteAppel", $obj->getCarteAppel());
    }

    /**
     * Tests the setCodeBanque() method.
     *
     * @return void
     */
    public function testSetCodeBanque(): void {

        $obj = new CartesAppelEtebac();

        $obj->setCodeBanque("codeBanque");
        $this->assertEquals("codeBanque", $obj->getCodeBanque());
    }

    /**
     * Tests the setIdCarte() method.
     *
     * @return void
     */
    public function testSetIdCarte(): void {

        $obj = new CartesAppelEtebac();

        $obj->setIdCarte("idCarte");
        $this->assertEquals("idCarte", $obj->getIdCarte());
    }

    /**
     * Tests the setLgCarteAppel() method.
     *
     * @return void
     */
    public function testSetLgCarteAppel(): void {

        $obj = new CartesAppelEtebac();

        $obj->setLgCarteAppel("lgCarteAppel");
        $this->assertEquals("lgCarteAppel", $obj->getLgCarteAppel());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new CartesAppelEtebac();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setTypeCarte() method.
     *
     * @return void
     */
    public function testSetTypeCarte(): void {

        $obj = new CartesAppelEtebac();

        $obj->setTypeCarte("typeCarte");
        $this->assertEquals("typeCarte", $obj->getTypeCarte());
    }

    /**
     * Tests the __construct() method.
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
