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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAz59LibTrait;

/**
 * Az59 lib trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAz59LibTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz59Lib() method.
     *
     * @return void
     */
    public function testSetAz59Lib() {

        $obj = new TestStringAz59LibTrait();

        $obj->setAz59Lib("az59Lib");
        $this->assertEquals("az59Lib", $obj->getAz59Lib());
    }
}
