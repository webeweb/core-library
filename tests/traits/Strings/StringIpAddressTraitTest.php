<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringIpAddressTrait;

/**
 * String IP address trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringIpAddressTraitTest extends AbstractTestCase {

    /**
     * Tests setIpAddress()
     *
     * @return void
     */
    public function testSetIpAddress(): void {

        $obj = new TestStringIpAddressTrait();

        $obj->setIpAddress("ipAddress");
        $this->assertEquals("ipAddress", $obj->getIpAddress());
    }
}
