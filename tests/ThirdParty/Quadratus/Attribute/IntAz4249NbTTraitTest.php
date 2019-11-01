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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntAz4249NbTTrait;

/**
 * Az4249 nb t trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntAz4249NbTTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4249NbT() method.
     *
     * @return void
     */
    public function testSetAz4249NbT() {

        $obj = new TestIntAz4249NbTTrait();

        $obj->setAz4249NbT(10);
        $this->assertEquals(10, $obj->getAz4249NbT());
    }
}
