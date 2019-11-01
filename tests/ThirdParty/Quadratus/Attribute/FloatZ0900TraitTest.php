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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatZ0900Trait;

/**
 * Z0900 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatZ0900TraitTest extends AbstractTestCase {

    /**
     * Tests the setZ0900() method.
     *
     * @return void
     */
    public function testSetZ0900() {

        $obj = new TestFloatZ0900Trait();

        $obj->setZ0900(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0900());
    }
}
