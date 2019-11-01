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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatHabs0Trait;

/**
 * H a b s0 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatHabs0TraitTest extends AbstractTestCase {

    /**
     * Tests the setHabs0() method.
     *
     * @return void
     */
    public function testSetHabs0() {

        $obj = new TestFloatHabs0Trait();

        $obj->setHabs0(10.092018);
        $this->assertEquals(10.092018, $obj->getHabs0());
    }
}
