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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCColect11Trait;

/**
 * C colect11 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCColect11TraitTest extends AbstractTestCase {

    /**
     * Tests the setCColect11() method.
     *
     * @return void
     */
    public function testSetCColect11() {

        $obj = new TestStringCColect11Trait();

        $obj->setCColect11("cColect11");
        $this->assertEquals("cColect11", $obj->getCColect11());
    }
}
