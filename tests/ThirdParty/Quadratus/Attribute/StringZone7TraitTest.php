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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZone7Trait;

/**
 * Zone7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZone7TraitTest extends AbstractTestCase {

    /**
     * Tests the setZone7() method.
     *
     * @return void
     */
    public function testSetZone7() {

        $obj = new TestStringZone7Trait();

        $obj->setZone7("zone7");
        $this->assertEquals("zone7", $obj->getZone7());
    }
}
