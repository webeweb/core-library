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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringMacAddressTrait;

/**
 * String MAC address trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringMacAddressTraitTest extends AbstractTestCase {

    /**
     * Tests setMacAddress()
     *
     * @return void
     */
    public function testSetMacAddress(): void {

        $obj = new TestStringMacAddressTrait();

        $obj->setMacAddress("macAddress");
        $this->assertEquals("macAddress", $obj->getMacAddress());
    }
}
