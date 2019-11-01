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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatZ8003Trait;

/**
 * Z8003 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatZ8003TraitTest extends AbstractTestCase {

    /**
     * Tests the setZ8003() method.
     *
     * @return void
     */
    public function testSetZ8003() {

        $obj = new TestFloatZ8003Trait();

        $obj->setZ8003(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8003());
    }
}
