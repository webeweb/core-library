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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatZ9999Trait;

/**
 * Z9999 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatZ9999TraitTest extends AbstractTestCase {

    /**
     * Tests the setZ9999() method.
     *
     * @return void
     */
    public function testSetZ9999() {

        $obj = new TestFloatZ9999Trait();

        $obj->setZ9999(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9999());
    }
}
