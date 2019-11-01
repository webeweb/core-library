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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCColect12Trait;

/**
 * C colect12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCColect12TraitTest extends AbstractTestCase {

    /**
     * Tests the setCColect12() method.
     *
     * @return void
     */
    public function testSetCColect12() {

        $obj = new TestStringCColect12Trait();

        $obj->setCColect12("cColect12");
        $this->assertEquals("cColect12", $obj->getCColect12());
    }
}
