<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Tests\Serializer;

use WBW\Library\System\Serializer\SerializerKeys;
use WBW\Library\System\Tests\AbstractTestCase;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Serializer
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("dns", SerializerKeys::DNS);
        $this->assertEquals("duplex", SerializerKeys::DUPLEX);
        $this->assertEquals("gateway", SerializerKeys::GATEWAY);
        $this->assertEquals("ipv4", SerializerKeys::IPV4);
        $this->assertEquals("ipv6", SerializerKeys::IPV6);
        $this->assertEquals("mac", SerializerKeys::MAC);
        $this->assertEquals("speed", SerializerKeys::SPEED);
        $this->assertEquals("status", SerializerKeys::STATUS);
    }
}
