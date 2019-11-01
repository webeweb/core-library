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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringACorres1Trait;

/**
 * A corres1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringACorres1TraitTest extends AbstractTestCase {

    /**
     * Tests the setACorres1() method.
     *
     * @return void
     */
    public function testSetACorres1() {

        $obj = new TestStringACorres1Trait();

        $obj->setACorres1("aCorres1");
        $this->assertEquals("aCorres1", $obj->getACorres1());
    }
}
