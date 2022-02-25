<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\RegroupementEdBulEntete;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Regroupement ed bul entete test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class RegroupementEdBulEnteteTest extends AbstractTestCase {

    /**
     * Tests setAfficher()
     *
     * @return void
     */
    public function testSetAfficher(): void {

        $obj = new RegroupementEdBulEntete();

        $obj->setAfficher(true);
        $this->assertEquals(true, $obj->getAfficher());
    }

    /**
     * Tests setCodeRegroupEdBul()
     *
     * @return void
     */
    public function testSetCodeRegroupEdBul(): void {

        $obj = new RegroupementEdBulEntete();

        $obj->setCodeRegroupEdBul("codeRegroupEdBul");
        $this->assertEquals("codeRegroupEdBul", $obj->getCodeRegroupEdBul());
    }

    /**
     * Tests setCodeTitre()
     *
     * @return void
     */
    public function testSetCodeTitre(): void {

        $obj = new RegroupementEdBulEntete();

        $obj->setCodeTitre("codeTitre");
        $this->assertEquals("codeTitre", $obj->getCodeTitre());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new RegroupementEdBulEntete();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setQuadra()
     *
     * @return void
     */
    public function testSetQuadra(): void {

        $obj = new RegroupementEdBulEntete();

        $obj->setQuadra(true);
        $this->assertEquals(true, $obj->getQuadra());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RegroupementEdBulEntete();

        $this->assertNull($obj->getAfficher());
        $this->assertNull($obj->getCodeRegroupEdBul());
        $this->assertNull($obj->getCodeTitre());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getQuadra());
    }
}
