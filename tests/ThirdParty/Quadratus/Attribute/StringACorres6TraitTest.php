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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringACorres6Trait;

/**
 * A corres6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringACorres6TraitTest extends AbstractTestCase {

    /**
     * Tests the setACorres6() method.
     *
     * @return void
     */
    public function testSetACorres6() {

        $obj = new TestStringACorres6Trait();

        $obj->setACorres6("aCorres6");
        $this->assertEquals("aCorres6", $obj->getACorres6());
    }
}
