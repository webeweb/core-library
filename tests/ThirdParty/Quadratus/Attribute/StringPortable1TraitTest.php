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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPortable1Trait;

/**
 * Portable1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPortable1TraitTest extends AbstractTestCase {

    /**
     * Tests the setPortable1() method.
     *
     * @return void
     */
    public function testSetPortable1() {

        $obj = new TestStringPortable1Trait();

        $obj->setPortable1("portable1");
        $this->assertEquals("portable1", $obj->getPortable1());
    }
}
