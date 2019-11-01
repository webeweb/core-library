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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureMenu2Trait;

/**
 * Nature menu2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureMenu2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureMenu2() method.
     *
     * @return void
     */
    public function testSetNatureMenu2() {

        $obj = new TestStringNatureMenu2Trait();

        $obj->setNatureMenu2("natureMenu2");
        $this->assertEquals("natureMenu2", $obj->getNatureMenu2());
    }
}
