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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAz50LibTrait;

/**
 * Az50 lib trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAz50LibTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz50Lib() method.
     *
     * @return void
     */
    public function testSetAz50Lib() {

        $obj = new TestStringAz50LibTrait();

        $obj->setAz50Lib("az50Lib");
        $this->assertEquals("az50Lib", $obj->getAz50Lib());
    }
}
