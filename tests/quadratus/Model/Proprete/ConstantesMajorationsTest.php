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

use WBW\Library\Quadratus\Model\Proprete\ConstantesMajorations;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Constantes majorations test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ConstantesMajorationsTest extends AbstractTestCase {

    /**
     * Tests setExcept()
     *
     * @return void
     */
    public function testSetExcept(): void {

        $obj = new ConstantesMajorations();

        $obj->setExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getExcept());
    }

    /**
     * Tests setMai()
     *
     * @return void
     */
    public function testSetMai(): void {

        $obj = new ConstantesMajorations();

        $obj->setMai(10.092018);
        $this->assertEquals(10.092018, $obj->getMai());
    }

    /**
     * Tests setNormal()
     *
     * @return void
     */
    public function testSetNormal(): void {

        $obj = new ConstantesMajorations();

        $obj->setNormal(10.092018);
        $this->assertEquals(10.092018, $obj->getNormal());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new ConstantesMajorations();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests setType2()
     *
     * @return void
     */
    public function testSetType2(): void {

        $obj = new ConstantesMajorations();

        $obj->setType2(10.092018);
        $this->assertEquals(10.092018, $obj->getType2());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConstantesMajorations();

        $this->assertNull($obj->getExcept());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getNormal());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getType2());
    }
}
