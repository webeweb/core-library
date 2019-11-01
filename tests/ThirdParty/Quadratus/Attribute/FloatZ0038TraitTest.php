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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatZ0038Trait;

/**
 * Z0038 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatZ0038TraitTest extends AbstractTestCase {

    /**
     * Tests the setZ0038() method.
     *
     * @return void
     */
    public function testSetZ0038() {

        $obj = new TestFloatZ0038Trait();

        $obj->setZ0038(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0038());
    }
}
