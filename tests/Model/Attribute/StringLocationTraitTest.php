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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringLocationTrait;

/**
 * String location trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringLocationTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringLocationTrait();

        $this->assertNull($obj->getLocation());
    }

    /**
     * Tests the setLocation() method.
     *
     * @return void
     */
    public function testSetLocation() {

        $obj = new TestStringLocationTrait();

        $obj->setLocation("location");
        $this->assertEquals("location", $obj->getLocation());
    }
}
