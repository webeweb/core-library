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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMiniRemise2Trait;

/**
 * Mini remise2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMiniRemise2TraitTest extends AbstractTestCase {

    /**
     * Tests the setMiniRemise2() method.
     *
     * @return void
     */
    public function testSetMiniRemise2() {

        $obj = new TestFloatMiniRemise2Trait();

        $obj->setMiniRemise2(10.092018);
        $this->assertEquals(10.092018, $obj->getMiniRemise2());
    }
}
