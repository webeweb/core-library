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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCredit1Trait;

/**
 * Credit_1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCredit1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCredit1() method.
     *
     * @return void
     */
    public function testSetCredit1() {

        $obj = new TestFloatCredit1Trait();

        $obj->setCredit1(10.092018);
        $this->assertEquals(10.092018, $obj->getCredit1());
    }
}
