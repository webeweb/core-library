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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestBooleanEnabledTrait;

/**
 * Boolean enabled trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class BooleanEnabledTraitTest extends AbstractTestCase {

    /**
     * Tests the setEnabled() method.
     *
     * @return void
     */
    public function testSetEnaled() {

        $obj = new TestBooleanEnabledTrait();

        $obj->setEnabled(true);
        $this->assertTrue($obj->getEnabled());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestBooleanEnabledTrait();

        $this->assertNull($obj->getEnabled());
    }
}
