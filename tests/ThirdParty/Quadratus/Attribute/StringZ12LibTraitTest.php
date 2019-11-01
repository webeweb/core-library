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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZ12LibTrait;

/**
 * z12 lib trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZ12LibTraitTest extends AbstractTestCase {

    /**
     * Tests the setZ12Lib() method.
     *
     * @return void
     */
    public function testSetZ12Lib() {

        $obj = new TestStringZ12LibTrait();

        $obj->setZ12Lib("z12Lib");
        $this->assertEquals("z12Lib", $obj->getZ12Lib());
    }
}
