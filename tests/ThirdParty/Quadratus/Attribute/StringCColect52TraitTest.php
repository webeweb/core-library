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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCColect52Trait;

/**
 * C colect52 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCColect52TraitTest extends AbstractTestCase {

    /**
     * Tests the setCColect52() method.
     *
     * @return void
     */
    public function testSetCColect52() {

        $obj = new TestStringCColect52Trait();

        $obj->setCColect52("cColect52");
        $this->assertEquals("cColect52", $obj->getCColect52());
    }
}
