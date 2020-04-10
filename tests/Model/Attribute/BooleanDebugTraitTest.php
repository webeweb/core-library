<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestBooleanDebugTrait;

/**
 * Boolean debug trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class BooleanDebugTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestBooleanDebugTrait();

        $this->assertNull($obj->getDebug());
    }

    /**
     * Tests the setDebug() method.
     *
     * @return void
     */
    public function testSetEnaled() {

        $obj = new TestBooleanDebugTrait();

        $obj->setDebug(true);
        $this->assertTrue($obj->getDebug());
    }
}
