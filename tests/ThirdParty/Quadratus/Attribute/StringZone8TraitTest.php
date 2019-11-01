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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZone8Trait;

/**
 * Zone8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZone8TraitTest extends AbstractTestCase {

    /**
     * Tests the setZone8() method.
     *
     * @return void
     */
    public function testSetZone8() {

        $obj = new TestStringZone8Trait();

        $obj->setZone8("zone8");
        $this->assertEquals("zone8", $obj->getZone8());
    }
}
