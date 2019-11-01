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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatZ8005Trait;

/**
 * Z8005 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatZ8005TraitTest extends AbstractTestCase {

    /**
     * Tests the setZ8005() method.
     *
     * @return void
     */
    public function testSetZ8005() {

        $obj = new TestFloatZ8005Trait();

        $obj->setZ8005(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8005());
    }
}
