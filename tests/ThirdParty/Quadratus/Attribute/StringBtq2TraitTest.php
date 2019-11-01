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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringBtq2Trait;

/**
 * B t q2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringBtq2TraitTest extends AbstractTestCase {

    /**
     * Tests the setBtq2() method.
     *
     * @return void
     */
    public function testSetBtq2() {

        $obj = new TestStringBtq2Trait();

        $obj->setBtq2("btq2");
        $this->assertEquals("btq2", $obj->getBtq2());
    }
}
