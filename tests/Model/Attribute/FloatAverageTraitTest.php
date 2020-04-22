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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestFloatAverageTrait;

/**
 * Float average trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class FloatAverageTraitTest extends AbstractTestCase {

    /**
     * Tests the setAverage() method.
     *
     * @return void
     */
    public function testSetAverage() {

        $obj = new TestFloatAverageTrait();

        $obj->setAverage(1.01);
        $this->assertEquals(1.01, $obj->getAverage());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestFloatAverageTrait();

        $this->assertNull($obj->getAverage());
    }
}
