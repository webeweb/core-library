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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestFloatQuantityTrait;

/**
 * Float quantity trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class FloatQuantityTraitTest extends AbstractTestCase {

    /**
     * Tests the setQuantity() method.
     *
     * @return void
     */
    public function testSetQuantity(): void {

        $obj = new TestFloatQuantityTrait();

        $obj->setQuantity(1.01);
        $this->assertEquals(1.01, $obj->getQuantity());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestFloatQuantityTrait();

        $this->assertNull($obj->getQuantity());
    }
}
