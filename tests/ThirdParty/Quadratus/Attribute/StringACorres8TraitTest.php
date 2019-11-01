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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringACorres8Trait;

/**
 * A corres8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringACorres8TraitTest extends AbstractTestCase {

    /**
     * Tests the setACorres8() method.
     *
     * @return void
     */
    public function testSetACorres8() {

        $obj = new TestStringACorres8Trait();

        $obj->setACorres8("aCorres8");
        $this->assertEquals("aCorres8", $obj->getACorres8());
    }
}
