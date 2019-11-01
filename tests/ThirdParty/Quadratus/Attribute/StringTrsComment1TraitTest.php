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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsComment1Trait;

/**
 * T r s comment1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsComment1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsComment1() method.
     *
     * @return void
     */
    public function testSetTrsComment1() {

        $obj = new TestStringTrsComment1Trait();

        $obj->setTrsComment1("trsComment1");
        $this->assertEquals("trsComment1", $obj->getTrsComment1());
    }
}
