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

        $this->assertEquals("available", SerializerKeys::AVAILABLE);
        $this->assertEquals("codename", SerializerKeys::CODENAME);
        $this->assertEquals("dns", SerializerKeys::DNS);
        $this->assertEquals("duplex", SerializerKeys::DUPLEX);
        $this->assertEquals("fileSystem", SerializerKeys::FILE_SYSTEM);
        $this->assertEquals("gateway", SerializerKeys::GATEWAY);
        $this->assertEquals("hi", SerializerKeys::HI);
        $this->assertEquals("ipv4", SerializerKeys::IPV4);
        $this->assertEquals("ipv6", SerializerKeys::IPV6);
        $this->assertEquals("mac", SerializerKeys::MAC);
        $this->assertEquals("mountedOn", SerializerKeys::MOUNTED_ON);
        $this->assertEquals("ni", SerializerKeys::NI);
        $this->assertEquals("release", SerializerKeys::RELEASE);
        $this->assertEquals("si", SerializerKeys::SI);
        $this->assertEquals("speed", SerializerKeys::SPEED);
        $this->assertEquals("st", SerializerKeys::ST);
        $this->assertEquals("status", SerializerKeys::STATUS);
        $this->assertEquals("sy", SerializerKeys::SY);
        $this->assertEquals("us", SerializerKeys::US);
        $this->assertEquals("usePercent", SerializerKeys::USE_PERCENT);
        $this->assertEquals("used", SerializerKeys::USED);
        $this->assertEquals("wa", SerializerKeys::WA);
    }
}
