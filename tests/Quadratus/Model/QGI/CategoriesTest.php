<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use WBW\Library\Core\Quadratus\Model\QGI\Categories;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Categories model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class CategoriesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Categories();

        $this->assertNull($obj->getCarTec());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getParent());
        $this->assertNull($obj->getType());
    }

    /**
     * Tests the setCarTec() method.
     *
     * @return void
     */
    public function testSetCarTec() {

        $obj = new Categories();

        $obj->setCarTec("carTec");
        $this->assertEquals("carTec", $obj->getCarTec());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new Categories();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setParent() method.
     *
     * @return void
     */
    public function testSetParent() {

        $obj = new Categories();

        $obj->setParent("parent");
        $this->assertEquals("parent", $obj->getParent());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new Categories();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

}
