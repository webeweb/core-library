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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringTooltipTrait;

/**
 * String tooltip trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringTooltipTraitTest extends AbstractTestCase {

    /**
     * Tests the setTooltip() method.
     *
     * @return void
     */
    public function testSetTooltip(): void {

        $obj = new TestStringTooltipTrait();

        $obj->setTooltip("tooltip");
        $this->assertEquals("tooltip", $obj->getTooltip());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestStringTooltipTrait();

        $this->assertNull($obj->getTooltip());
    }
}
