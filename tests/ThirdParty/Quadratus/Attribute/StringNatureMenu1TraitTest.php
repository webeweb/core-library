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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureMenu1Trait;

/**
 * Nature menu1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureMenu1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureMenu1() method.
     *
     * @return void
     */
    public function testSetNatureMenu1() {

        $obj = new TestStringNatureMenu1Trait();

        $obj->setNatureMenu1("natureMenu1");
        $this->assertEquals("natureMenu1", $obj->getNatureMenu1());
    }
}
