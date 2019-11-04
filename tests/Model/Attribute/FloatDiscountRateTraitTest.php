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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestFloatDiscountRateTrait;

/**
 * Float discount rate trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class FloatDiscountRateTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestFloatDiscountRateTrait();

        $this->assertNull($obj->getDiscountRate());
    }

    /**
     * Tests the setDiscountRate() method.
     *
     * @return void
     */
    public function testSetDiscountRate() {

        $obj = new TestFloatDiscountRateTrait();

        $obj->setDiscountRate(1.01);
        $this->assertEquals(1.01, $obj->getDiscountRate());
    }
}
