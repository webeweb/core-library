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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCColect31Trait;

/**
 * C colect31 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCColect31TraitTest extends AbstractTestCase {

    /**
     * Tests the setCColect31() method.
     *
     * @return void
     */
    public function testSetCColect31() {

        $obj = new TestStringCColect31Trait();

        $obj->setCColect31("cColect31");
        $this->assertEquals("cColect31", $obj->getCColect31());
    }
}
