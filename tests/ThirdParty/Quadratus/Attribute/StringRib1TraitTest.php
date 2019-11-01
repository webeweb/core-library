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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRib1Trait;

/**
 * Rib1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRib1TraitTest extends AbstractTestCase {

    /**
     * Tests the setRib1() method.
     *
     * @return void
     */
    public function testSetRib1() {

        $obj = new TestStringRib1Trait();

        $obj->setRib1("rib1");
        $this->assertEquals("rib1", $obj->getRib1());
    }
}
