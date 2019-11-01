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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAz38LibTrait;

/**
 * Az38 lib trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAz38LibTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz38Lib() method.
     *
     * @return void
     */
    public function testSetAz38Lib() {

        $obj = new TestStringAz38LibTrait();

        $obj->setAz38Lib("az38Lib");
        $this->assertEquals("az38Lib", $obj->getAz38Lib());
    }
}
