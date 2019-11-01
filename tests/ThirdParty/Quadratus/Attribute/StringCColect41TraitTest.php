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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCColect41Trait;

/**
 * C colect41 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCColect41TraitTest extends AbstractTestCase {

    /**
     * Tests the setCColect41() method.
     *
     * @return void
     */
    public function testSetCColect41() {

        $obj = new TestStringCColect41Trait();

        $obj->setCColect41("cColect41");
        $this->assertEquals("cColect41", $obj->getCColect41());
    }
}
