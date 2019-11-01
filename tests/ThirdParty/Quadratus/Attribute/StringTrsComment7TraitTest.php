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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsComment7Trait;

/**
 * T r s comment7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsComment7TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsComment7() method.
     *
     * @return void
     */
    public function testSetTrsComment7() {

        $obj = new TestStringTrsComment7Trait();

        $obj->setTrsComment7("trsComment7");
        $this->assertEquals("trsComment7", $obj->getTrsComment7());
    }
}
