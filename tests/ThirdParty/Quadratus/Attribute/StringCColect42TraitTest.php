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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCColect42Trait;

/**
 * C colect42 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCColect42TraitTest extends AbstractTestCase {

    /**
     * Tests the setCColect42() method.
     *
     * @return void
     */
    public function testSetCColect42() {

        $obj = new TestStringCColect42Trait();

        $obj->setCColect42("cColect42");
        $this->assertEquals("cColect42", $obj->getCColect42());
    }
}
