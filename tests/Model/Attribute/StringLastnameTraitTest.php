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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringLastNameTrait;

/**
 * String last name trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringLastnameTraitTest extends AbstractTestCase {

    /**
     * Tests the setLastName() method.
     *
     * @return void
     */
    public function testSetLastName() {

        $obj = new TestStringLastNameTrait();

        $obj->setLastName("lastname");
        $this->assertEquals("lastname", $obj->getLastName());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestStringLastNameTrait();

        $this->assertNull($obj->getLastName());
    }
}
