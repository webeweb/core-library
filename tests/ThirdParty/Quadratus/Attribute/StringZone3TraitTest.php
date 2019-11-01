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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZone3Trait;

/**
 * Zone3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZone3TraitTest extends AbstractTestCase {

    /**
     * Tests the setZone3() method.
     *
     * @return void
     */
    public function testSetZone3() {

        $obj = new TestStringZone3Trait();

        $obj->setZone3("zone3");
        $this->assertEquals("zone3", $obj->getZone3());
    }
}
