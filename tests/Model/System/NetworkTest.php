<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Model\System;

use JsonSerializable;
use WBW\Library\Common\Model\System\Network;
use WBW\Library\Common\Model\System\NetworkInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Network test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\System
 */
class NetworkTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Network();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setDns()
     *
     * @return void
     */
    public function testSetDns(): void {

        $obj = new Network();

        $obj->setDns("dns");
        $this->assertEquals("dns", $obj->getDns());
    }

    /**
     * Test setGateway()
     *
     * @return void
     */
    public function testSetGateway(): void {

        $obj = new Network();

        $obj->setGateway("gateway");
        $this->assertEquals("gateway", $obj->getGateway());
    }

    /**
     * Test setHostname()
     *
     * @return void
     */
    public function testSetHostname(): void {

        $obj = new Network();

        $obj->setHostname("hostname");
        $this->assertEquals("hostname", $obj->getHostname());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Network();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(NetworkInterface::class, $obj);

        $this->assertNull($obj->getHostname());
        $this->assertNull($obj->getGateway());
        $this->assertNull($obj->getDns());
    }
}
