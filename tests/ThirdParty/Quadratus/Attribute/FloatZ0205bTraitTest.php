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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatZ0205bTrait;

/**
 * Z0205b trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatZ0205bTraitTest extends AbstractTestCase {

    /**
     * Tests the setZ0205b() method.
     *
     * @return void
     */
    public function testSetZ0205b() {

        $obj = new TestFloatZ0205bTrait();

        $obj->setZ0205b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0205b());
    }
}
