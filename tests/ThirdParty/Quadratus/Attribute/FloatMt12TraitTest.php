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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMt12Trait;

/**
 * M t12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMt12TraitTest extends AbstractTestCase {

    /**
     * Tests the setMt12() method.
     *
     * @return void
     */
    public function testSetMt12() {

        $obj = new TestFloatMt12Trait();

        $obj->setMt12(10.092018);
        $this->assertEquals(10.092018, $obj->getMt12());
    }
}
