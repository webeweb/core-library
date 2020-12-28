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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringDataTrait;

/**
 * String data trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringDataTraitTest extends AbstractTestCase {

    /**
     * Tests the setData() method.
     *
     * @return void
     */
    public function testSetData(): void {

        $obj = new TestStringDataTrait();

        $obj->setData("data");
        $this->assertEquals("data", $obj->getData());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestStringDataTrait();

        $this->assertNull($obj->getData());
    }
}
