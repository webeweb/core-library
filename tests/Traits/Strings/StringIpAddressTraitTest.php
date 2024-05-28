<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringIpAddressTrait;

/**
 * String IP address trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringIpAddressTraitTest extends AbstractTestCase {

    /**
     * Test setIpAddress()
     *
     * @return void
     */
    public function testSetIpAddress(): void {

        $obj = new TestStringIpAddressTrait();

        $obj->setIpAddress("ipAddress");
        $this->assertEquals("ipAddress", $obj->getIpAddress());
    }
}
