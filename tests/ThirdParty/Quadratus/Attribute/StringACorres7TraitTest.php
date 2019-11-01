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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringACorres7Trait;

/**
 * A corres7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringACorres7TraitTest extends AbstractTestCase {

    /**
     * Tests the setACorres7() method.
     *
     * @return void
     */
    public function testSetACorres7() {

        $obj = new TestStringACorres7Trait();

        $obj->setACorres7("aCorres7");
        $this->assertEquals("aCorres7", $obj->getACorres7());
    }
}
