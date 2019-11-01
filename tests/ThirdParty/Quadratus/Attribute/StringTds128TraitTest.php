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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTds128Trait;

/**
 * T d s128 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTds128TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds128() method.
     *
     * @return void
     */
    public function testSetTds128() {

        $obj = new TestStringTds128Trait();

        $obj->setTds128("tds128");
        $this->assertEquals("tds128", $obj->getTds128());
    }
}
