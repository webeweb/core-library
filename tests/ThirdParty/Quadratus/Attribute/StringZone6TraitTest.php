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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZone6Trait;

/**
 * Zone6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZone6TraitTest extends AbstractTestCase {

    /**
     * Tests the setZone6() method.
     *
     * @return void
     */
    public function testSetZone6() {

        $obj = new TestStringZone6Trait();

        $obj->setZone6("zone6");
        $this->assertEquals("zone6", $obj->getZone6());
    }
}
