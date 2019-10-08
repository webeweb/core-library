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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RegroupementEdBul;

/**
 * Regroupement ed bul model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RegroupementEdBulTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RegroupementEdBul();

        $this->assertNull($obj->getAfficher());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeRegroupEdBul());
        $this->assertNull($obj->getCodeTitre());
        $this->assertNull($obj->getExo());
        $this->assertNull($obj->getQuadra());
    }

    /**
     * Tests the setAfficher() method.
     *
     * @return void
     */
    public function testSetAfficher() {

        $obj = new RegroupementEdBul();

        $obj->setAfficher(true);
        $this->assertEquals(true, $obj->getAfficher());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle() {

        $obj = new RegroupementEdBul();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setCodeRegroupEdBul() method.
     *
     * @return void
     */
    public function testSetCodeRegroupEdBul() {

        $obj = new RegroupementEdBul();

        $obj->setCodeRegroupEdBul("codeRegroupEdBul");
        $this->assertEquals("codeRegroupEdBul", $obj->getCodeRegroupEdBul());
    }

    /**
     * Tests the setCodeTitre() method.
     *
     * @return void
     */
    public function testSetCodeTitre() {

        $obj = new RegroupementEdBul();

        $obj->setCodeTitre("codeTitre");
        $this->assertEquals("codeTitre", $obj->getCodeTitre());
    }

    /**
     * Tests the setExo() method.
     *
     * @return void
     */
    public function testSetExo() {

        $obj = new RegroupementEdBul();

        $obj->setExo(true);
        $this->assertEquals(true, $obj->getExo());
    }

    /**
     * Tests the setQuadra() method.
     *
     * @return void
     */
    public function testSetQuadra() {

        $obj = new RegroupementEdBul();

        $obj->setQuadra(true);
        $this->assertEquals(true, $obj->getQuadra());
    }
}
