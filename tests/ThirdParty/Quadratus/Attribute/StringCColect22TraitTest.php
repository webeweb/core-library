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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCColect22Trait;

/**
 * C colect22 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCColect22TraitTest extends AbstractTestCase {

    /**
     * Tests the setCColect22() method.
     *
     * @return void
     */
    public function testSetCColect22() {

        $obj = new TestStringCColect22Trait();

        $obj->setCColect22("cColect22");
        $this->assertEquals("cColect22", $obj->getCColect22());
    }
}
