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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatZ0035Trait;

/**
 * Z0035 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatZ0035TraitTest extends AbstractTestCase {

    /**
     * Tests the setZ0035() method.
     *
     * @return void
     */
    public function testSetZ0035() {

        $obj = new TestFloatZ0035Trait();

        $obj->setZ0035(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0035());
    }
}
