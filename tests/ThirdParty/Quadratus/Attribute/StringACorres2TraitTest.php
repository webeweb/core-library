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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringACorres2Trait;

/**
 * A corres2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringACorres2TraitTest extends AbstractTestCase {

    /**
     * Tests the setACorres2() method.
     *
     * @return void
     */
    public function testSetACorres2() {

        $obj = new TestStringACorres2Trait();

        $obj->setACorres2("aCorres2");
        $this->assertEquals("aCorres2", $obj->getACorres2());
    }
}
