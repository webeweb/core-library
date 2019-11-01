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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringACorres3Trait;

/**
 * A corres3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringACorres3TraitTest extends AbstractTestCase {

    /**
     * Tests the setACorres3() method.
     *
     * @return void
     */
    public function testSetACorres3() {

        $obj = new TestStringACorres3Trait();

        $obj->setACorres3("aCorres3");
        $this->assertEquals("aCorres3", $obj->getACorres3());
    }
}
