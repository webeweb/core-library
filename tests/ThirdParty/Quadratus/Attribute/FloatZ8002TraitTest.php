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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatZ8002Trait;

/**
 * Z8002 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatZ8002TraitTest extends AbstractTestCase {

    /**
     * Tests the setZ8002() method.
     *
     * @return void
     */
    public function testSetZ8002() {

        $obj = new TestFloatZ8002Trait();

        $obj->setZ8002(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8002());
    }
}
