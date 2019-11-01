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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureMenu8Trait;

/**
 * Nature menu8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureMenu8TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureMenu8() method.
     *
     * @return void
     */
    public function testSetNatureMenu8() {

        $obj = new TestStringNatureMenu8Trait();

        $obj->setNatureMenu8("natureMenu8");
        $this->assertEquals("natureMenu8", $obj->getNatureMenu8());
    }
}
