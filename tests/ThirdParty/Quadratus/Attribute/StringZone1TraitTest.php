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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZone1Trait;

/**
 * Zone1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZone1TraitTest extends AbstractTestCase {

    /**
     * Tests the setZone1() method.
     *
     * @return void
     */
    public function testSetZone1() {

        $obj = new TestStringZone1Trait();

        $obj->setZone1("zone1");
        $this->assertEquals("zone1", $obj->getZone1());
    }
}
