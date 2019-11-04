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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringFirstNameTrait;

/**
 * String first name trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringFirstNameTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringFirstNameTrait();

        $this->assertNull($obj->getFirstName());
    }

    /**
     * Tests the setFirstName() method.
     *
     * @return void
     */
    public function testSetFirstName() {

        $obj = new TestStringFirstNameTrait();

        $obj->setFirstName("firstname");
        $this->assertEquals("firstname", $obj->getFirstName());
    }
}
