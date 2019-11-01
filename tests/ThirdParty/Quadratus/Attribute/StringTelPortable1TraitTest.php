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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTelPortable1Trait;

/**
 * Tel portable1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTelPortable1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTelPortable1() method.
     *
     * @return void
     */
    public function testSetTelPortable1() {

        $obj = new TestStringTelPortable1Trait();

        $obj->setTelPortable1("telPortable1");
        $this->assertEquals("telPortable1", $obj->getTelPortable1());
    }
}
