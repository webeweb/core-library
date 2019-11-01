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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatHabs1Trait;

/**
 * H a b s1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatHabs1TraitTest extends AbstractTestCase {

    /**
     * Tests the setHabs1() method.
     *
     * @return void
     */
    public function testSetHabs1() {

        $obj = new TestFloatHabs1Trait();

        $obj->setHabs1(10.092018);
        $this->assertEquals(10.092018, $obj->getHabs1());
    }
}
