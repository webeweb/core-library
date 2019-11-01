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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTelPortable2Trait;

/**
 * Tel portable2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTelPortable2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTelPortable2() method.
     *
     * @return void
     */
    public function testSetTelPortable2() {

        $obj = new TestStringTelPortable2Trait();

        $obj->setTelPortable2("telPortable2");
        $this->assertEquals("telPortable2", $obj->getTelPortable2());
    }
}
