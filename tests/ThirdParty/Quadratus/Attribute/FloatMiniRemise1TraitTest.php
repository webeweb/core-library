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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMiniRemise1Trait;

/**
 * Mini remise1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMiniRemise1TraitTest extends AbstractTestCase {

    /**
     * Tests the setMiniRemise1() method.
     *
     * @return void
     */
    public function testSetMiniRemise1() {

        $obj = new TestFloatMiniRemise1Trait();

        $obj->setMiniRemise1(10.092018);
        $this->assertEquals(10.092018, $obj->getMiniRemise1());
    }
}
