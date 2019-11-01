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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZone12Trait;

/**
 * Zone12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZone12TraitTest extends AbstractTestCase {

    /**
     * Tests the setZone12() method.
     *
     * @return void
     */
    public function testSetZone12() {

        $obj = new TestStringZone12Trait();

        $obj->setZone12("zone12");
        $this->assertEquals("zone12", $obj->getZone12());
    }
}
