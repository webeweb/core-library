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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZoneLibre2Trait;

/**
 * Zone libre2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZoneLibre2TraitTest extends AbstractTestCase {

    /**
     * Tests the setZoneLibre2() method.
     *
     * @return void
     */
    public function testSetZoneLibre2() {

        $obj = new TestStringZoneLibre2Trait();

        $obj->setZoneLibre2("zoneLibre2");
        $this->assertEquals("zoneLibre2", $obj->getZoneLibre2());
    }
}
