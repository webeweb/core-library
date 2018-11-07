<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use WBW\Library\Core\Quadratus\Model\Proprete\ConstantesMajorations;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Constantes majorations model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class ConstantesMajorationsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ConstantesMajorations();

        $this->assertNull($obj->getExcept());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getNormal());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getType2());
    }

    /**
     * Tests the setExcept() method.
     *
     * @return void
     */
    public function testSetExcept() {

        $obj = new ConstantesMajorations();

        $obj->setExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getExcept());
    }

    /**
     * Tests the setMai() method.
     *
     * @return void
     */
    public function testSetMai() {

        $obj = new ConstantesMajorations();

        $obj->setMai(10.092018);
        $this->assertEquals(10.092018, $obj->getMai());
    }

    /**
     * Tests the setNormal() method.
     *
     * @return void
     */
    public function testSetNormal() {

        $obj = new ConstantesMajorations();

        $obj->setNormal(10.092018);
        $this->assertEquals(10.092018, $obj->getNormal());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new ConstantesMajorations();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the setType2() method.
     *
     * @return void
     */
    public function testSetType2() {

        $obj = new ConstantesMajorations();

        $obj->setType2(10.092018);
        $this->assertEquals(10.092018, $obj->getType2());
    }

}
