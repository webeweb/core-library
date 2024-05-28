<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\RegroupementEdBulTitres;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Regroupement ed bul titres test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class RegroupementEdBulTitresTest extends AbstractTestCase {

    /**
     * Test setAfficher()
     *
     * @return void
     */
    public function testSetAfficher(): void {

        $obj = new RegroupementEdBulTitres();

        $obj->setAfficher(true);
        $this->assertTrue($obj->getAfficher());
    }

    /**
     * Test setCodeTitre()
     *
     * @return void
     */
    public function testSetCodeTitre(): void {

        $obj = new RegroupementEdBulTitres();

        $obj->setCodeTitre("codeTitre");
        $this->assertEquals("codeTitre", $obj->getCodeTitre());
    }

    /**
     * Test setQuadra()
     *
     * @return void
     */
    public function testSetQuadra(): void {

        $obj = new RegroupementEdBulTitres();

        $obj->setQuadra(true);
        $this->assertTrue($obj->getQuadra());
    }

    /**
     * Test setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new RegroupementEdBulTitres();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RegroupementEdBulTitres();

        $this->assertNull($obj->getAfficher());
        $this->assertNull($obj->getCodeTitre());
        $this->assertNull($obj->getQuadra());
        $this->assertNull($obj->getTitre());
    }
}
