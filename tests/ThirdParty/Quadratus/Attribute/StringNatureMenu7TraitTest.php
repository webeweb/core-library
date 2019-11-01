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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureMenu7Trait;

/**
 * Nature menu7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureMenu7TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureMenu7() method.
     *
     * @return void
     */
    public function testSetNatureMenu7() {

        $obj = new TestStringNatureMenu7Trait();

        $obj->setNatureMenu7("natureMenu7");
        $this->assertEquals("natureMenu7", $obj->getNatureMenu7());
    }
}
