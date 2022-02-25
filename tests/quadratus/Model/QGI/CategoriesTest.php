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

use WBW\Library\Quadratus\Model\QGI\Categories;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Categories test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class CategoriesTest extends AbstractTestCase {

    /**
     * Tests setCarTec()
     *
     * @return void
     */
    public function testSetCarTec(): void {

        $obj = new Categories();

        $obj->setCarTec("carTec");
        $this->assertEquals("carTec", $obj->getCarTec());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Categories();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setParent()
     *
     * @return void
     */
    public function testSetParent(): void {

        $obj = new Categories();

        $obj->setParent("parent");
        $this->assertEquals("parent", $obj->getParent());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new Categories();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Categories();

        $this->assertNull($obj->getCarTec());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getParent());
        $this->assertNull($obj->getType());
    }
}
