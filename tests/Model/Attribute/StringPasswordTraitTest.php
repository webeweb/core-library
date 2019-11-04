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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringPasswordTrait;

/**
 * String password trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringPasswordTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringPasswordTrait();

        $this->assertNull($obj->getPassword());
    }

    /**
     * Tests the setPassword() method.
     *
     * @return void
     */
    public function testSetPassword() {

        $obj = new TestStringPasswordTrait();

        $obj->setPassword("password");
        $this->assertEquals("password", $obj->getPassword());
    }
}
