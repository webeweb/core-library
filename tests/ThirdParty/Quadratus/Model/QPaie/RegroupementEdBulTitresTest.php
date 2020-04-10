<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RegroupementEdBulTitres;

/**
 * Regroupement ed bul titres test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RegroupementEdBulTitresTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new RegroupementEdBulTitres();

        $this->assertNull($obj->getAfficher());
        $this->assertNull($obj->getCodeTitre());
        $this->assertNull($obj->getQuadra());
        $this->assertNull($obj->getTitre());
    }

    /**
     * Tests the setAfficher() method.
     *
     * @return void
     */
    public function testSetAfficher() {

        $obj = new RegroupementEdBulTitres();

        $obj->setAfficher(true);
        $this->assertEquals(true, $obj->getAfficher());
    }

    /**
     * Tests the setCodeTitre() method.
     *
     * @return void
     */
    public function testSetCodeTitre() {

        $obj = new RegroupementEdBulTitres();

        $obj->setCodeTitre("codeTitre");
        $this->assertEquals("codeTitre", $obj->getCodeTitre());
    }

    /**
     * Tests the setQuadra() method.
     *
     * @return void
     */
    public function testSetQuadra() {

        $obj = new RegroupementEdBulTitres();

        $obj->setQuadra(true);
        $this->assertEquals(true, $obj->getQuadra());
    }

    /**
     * Tests the setTitre() method.
     *
     * @return void
     */
    public function testSetTitre() {

        $obj = new RegroupementEdBulTitres();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }
}
