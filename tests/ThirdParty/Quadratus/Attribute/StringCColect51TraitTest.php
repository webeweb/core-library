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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCColect51Trait;

/**
 * C colect51 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCColect51TraitTest extends AbstractTestCase {

    /**
     * Tests the setCColect51() method.
     *
     * @return void
     */
    public function testSetCColect51() {

        $obj = new TestStringCColect51Trait();

        $obj->setCColect51("cColect51");
        $this->assertEquals("cColect51", $obj->getCColect51());
    }
}
