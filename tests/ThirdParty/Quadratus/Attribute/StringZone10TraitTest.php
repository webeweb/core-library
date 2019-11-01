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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZone10Trait;

/**
 * Zone10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZone10TraitTest extends AbstractTestCase {

    /**
     * Tests the setZone10() method.
     *
     * @return void
     */
    public function testSetZone10() {

        $obj = new TestStringZone10Trait();

        $obj->setZone10("zone10");
        $this->assertEquals("zone10", $obj->getZone10());
    }
}
