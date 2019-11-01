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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCColect21Trait;

/**
 * C colect21 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCColect21TraitTest extends AbstractTestCase {

    /**
     * Tests the setCColect21() method.
     *
     * @return void
     */
    public function testSetCColect21() {

        $obj = new TestStringCColect21Trait();

        $obj->setCColect21("cColect21");
        $this->assertEquals("cColect21", $obj->getCColect21());
    }
}
