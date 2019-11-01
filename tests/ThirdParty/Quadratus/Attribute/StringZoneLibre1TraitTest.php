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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZoneLibre1Trait;

/**
 * Zone libre1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZoneLibre1TraitTest extends AbstractTestCase {

    /**
     * Tests the setZoneLibre1() method.
     *
     * @return void
     */
    public function testSetZoneLibre1() {

        $obj = new TestStringZoneLibre1Trait();

        $obj->setZoneLibre1("zoneLibre1");
        $this->assertEquals("zoneLibre1", $obj->getZoneLibre1());
    }
}
