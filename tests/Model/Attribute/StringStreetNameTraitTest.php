<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringStreetNameTrait;

/**
 * String street name trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringStreetNameTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringStreetNameTrait();

        $this->assertNull($obj->getStreetName());
    }

    /**
     * Tests the setStreetName() method.
     *
     * @return void
     */
    public function testSetStreetName() {

        $obj = new TestStringStreetNameTrait();

        $obj->setStreetName("streetName");
        $this->assertEquals("streetName", $obj->getStreetName());
    }
}
