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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAzEuCodeTrait;

/**
 * Az e u code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAzEuCodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setAzEuCode() method.
     *
     * @return void
     */
    public function testSetAzEuCode() {

        $obj = new TestStringAzEuCodeTrait();

        $obj->setAzEuCode("azEuCode");
        $this->assertEquals("azEuCode", $obj->getAzEuCode());
    }
}
