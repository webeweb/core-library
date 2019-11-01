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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZone14Trait;

/**
 * Zone14 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZone14TraitTest extends AbstractTestCase {

    /**
     * Tests the setZone14() method.
     *
     * @return void
     */
    public function testSetZone14() {

        $obj = new TestStringZone14Trait();

        $obj->setZone14("zone14");
        $this->assertEquals("zone14", $obj->getZone14());
    }
}
