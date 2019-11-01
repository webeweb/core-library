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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZone13Trait;

/**
 * Zone13 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZone13TraitTest extends AbstractTestCase {

    /**
     * Tests the setZone13() method.
     *
     * @return void
     */
    public function testSetZone13() {

        $obj = new TestStringZone13Trait();

        $obj->setZone13("zone13");
        $this->assertEquals("zone13", $obj->getZone13());
    }
}
