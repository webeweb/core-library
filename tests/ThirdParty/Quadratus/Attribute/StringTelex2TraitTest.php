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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTelex2Trait;

/**
 * Telex2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTelex2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTelex2() method.
     *
     * @return void
     */
    public function testSetTelex2() {

        $obj = new TestStringTelex2Trait();

        $obj->setTelex2("telex2");
        $this->assertEquals("telex2", $obj->getTelex2());
    }
}
