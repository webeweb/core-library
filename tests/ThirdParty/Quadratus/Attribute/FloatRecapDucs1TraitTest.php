<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatRecapDucs1Trait;

/**
 * Recap ducs1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatRecapDucs1TraitTest extends AbstractTestCase {

    /**
     * Tests the setRecapDucs1() method.
     *
     * @return void
     */
    public function testSetRecapDucs1() {

        $obj = new TestFloatRecapDucs1Trait();

        $obj->setRecapDucs1(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs1());
    }
}
