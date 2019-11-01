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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMt21Trait;

/**
 * M t21 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMt21TraitTest extends AbstractTestCase {

    /**
     * Tests the setMt21() method.
     *
     * @return void
     */
    public function testSetMt21() {

        $obj = new TestFloatMt21Trait();

        $obj->setMt21(10.092018);
        $this->assertEquals(10.092018, $obj->getMt21());
    }
}
