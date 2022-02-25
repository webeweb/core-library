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

use WBW\Library\Quadratus\Model\Proprete\ArtVarDepot;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Art var depot test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ArtVarDepotTest extends AbstractTestCase {

    /**
     * Tests setAlleeCasier()
     *
     * @return void
     */
    public function testSetAlleeCasier(): void {

        $obj = new ArtVarDepot();

        $obj->setAlleeCasier("alleeCasier");
        $this->assertEquals("alleeCasier", $obj->getAlleeCasier());
    }

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new ArtVarDepot();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setCodeDepot()
     *
     * @return void
     */
    public function testSetCodeDepot(): void {

        $obj = new ArtVarDepot();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Tests setCodeVariante()
     *
     * @return void
     */
    public function testSetCodeVariante(): void {

        $obj = new ArtVarDepot();

        $obj->setCodeVariante("codeVariante");
        $this->assertEquals("codeVariante", $obj->getCodeVariante());
    }

    /**
     * Tests setQteStockAttente()
     *
     * @return void
     */
    public function testSetQteStockAttente(): void {

        $obj = new ArtVarDepot();

        $obj->setQteStockAttente(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockAttente());
    }

    /**
     * Tests setQteStockMaxi()
     *
     * @return void
     */
    public function testSetQteStockMaxi(): void {

        $obj = new ArtVarDepot();

        $obj->setQteStockMaxi(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockMaxi());
    }

    /**
     * Tests setQteStockMini()
     *
     * @return void
     */
    public function testSetQteStockMini(): void {

        $obj = new ArtVarDepot();

        $obj->setQteStockMini(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockMini());
    }

    /**
     * Tests setQteStockReel()
     *
     * @return void
     */
    public function testSetQteStockReel(): void {

        $obj = new ArtVarDepot();

        $obj->setQteStockReel(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockReel());
    }

    /**
     * Tests setQteStockReserve()
     *
     * @return void
     */
    public function testSetQteStockReserve(): void {

        $obj = new ArtVarDepot();

        $obj->setQteStockReserve(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockReserve());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
