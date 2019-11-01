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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNoCacmTrait;

/**
 * No c a c m trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNoCacmTraitTest extends AbstractTestCase {

    /**
     * Tests the setNoCacm() method.
     *
     * @return void
     */
    public function testSetNoCacm() {

        $obj = new TestStringNoCacmTrait();

        $obj->setNoCacm("noCacm");
        $this->assertEquals("noCacm", $obj->getNoCacm());
    }
}
