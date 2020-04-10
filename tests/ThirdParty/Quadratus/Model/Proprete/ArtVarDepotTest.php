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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ArtVarDepot;

/**
 * Art var depot test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ArtVarDepotTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ArtVarDepot();

        $this->assertNull($obj->getAlleeCasier());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeDepot());
        $this->assertNull($obj->getCodeVariante());
        $this->assertNull($obj->getQteStockAttente());
        $this->assertNull($obj->getQteStockMaxi());
        $this->assertNull($obj->getQteStockMini());
        $this->assertNull($obj->getQteStockReel());
        $this->assertNull($obj->getQteStockReserve());
    }

    /**
     * Tests the setAlleeCasier() method.
     *
     * @return void
     */
    public function testSetAlleeCasier() {

        $obj = new ArtVarDepot();

        $obj->setAlleeCasier("alleeCasier");
        $this->assertEquals("alleeCasier", $obj->getAlleeCasier());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new ArtVarDepot();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeDepot() method.
     *
     * @return void
     */
    public function testSetCodeDepot() {

        $obj = new ArtVarDepot();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Tests the setCodeVariante() method.
     *
     * @return void
     */
    public function testSetCodeVariante() {

        $obj = new ArtVarDepot();

        $obj->setCodeVariante("codeVariante");
        $this->assertEquals("codeVariante", $obj->getCodeVariante());
    }

    /**
     * Tests the setQteStockAttente() method.
     *
     * @return void
     */
    public function testSetQteStockAttente() {

        $obj = new ArtVarDepot();

        $obj->setQteStockAttente(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockAttente());
    }

    /**
     * Tests the setQteStockMaxi() method.
     *
     * @return void
     */
    public function testSetQteStockMaxi() {

        $obj = new ArtVarDepot();

        $obj->setQteStockMaxi(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockMaxi());
    }

    /**
     * Tests the setQteStockMini() method.
     *
     * @return void
     */
    public function testSetQteStockMini() {

        $obj = new ArtVarDepot();

        $obj->setQteStockMini(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockMini());
    }

    /**
     * Tests the setQteStockReel() method.
     *
     * @return void
     */
    public function testSetQteStockReel() {

        $obj = new ArtVarDepot();

        $obj->setQteStockReel(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockReel());
    }

    /**
     * Tests the setQteStockReserve() method.
     *
     * @return void
     */
    public function testSetQteStockReserve() {

        $obj = new ArtVarDepot();

        $obj->setQteStockReserve(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockReserve());
    }
}
