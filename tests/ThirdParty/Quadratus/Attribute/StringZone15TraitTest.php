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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZone15Trait;

/**
 * Zone15 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZone15TraitTest extends AbstractTestCase {

    /**
     * Tests the setZone15() method.
     *
     * @return void
     */
    public function testSetZone15() {

        $obj = new TestStringZone15Trait();

        $obj->setZone15("zone15");
        $this->assertEquals("zone15", $obj->getZone15());
    }
}
