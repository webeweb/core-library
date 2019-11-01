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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCColect32Trait;

/**
 * C colect32 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCColect32TraitTest extends AbstractTestCase {

    /**
     * Tests the setCColect32() method.
     *
     * @return void
     */
    public function testSetCColect32() {

        $obj = new TestStringCColect32Trait();

        $obj->setCColect32("cColect32");
        $this->assertEquals("cColect32", $obj->getCColect32());
    }
}
