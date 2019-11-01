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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRib2Trait;

/**
 * Rib2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRib2TraitTest extends AbstractTestCase {

    /**
     * Tests the setRib2() method.
     *
     * @return void
     */
    public function testSetRib2() {

        $obj = new TestStringRib2Trait();

        $obj->setRib2("rib2");
        $this->assertEquals("rib2", $obj->getRib2());
    }
}
