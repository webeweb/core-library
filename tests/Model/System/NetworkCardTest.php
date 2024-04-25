<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Model\System;

use JsonSerializable;
use WBW\Library\Common\Model\System\NetworkCard;
use WBW\Library\Common\Model\System\NetworkCardInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Network card test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\System
 */
class NetworkCardTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new NetworkCard();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setDuplex()
     *
     * @return void
     */
    public function testSetDuplex(): void {

        $obj = new NetworkCard();

        $obj->setDuplex("duplex");
        $this->assertEquals("duplex", $obj->getDuplex());
    }

    /**
     * Test setIpv4()
     *
     * @return void
     */
    public function testSetIpv4(): void {

        $obj = new NetworkCard();

        $obj->setIpv4("ipv4");
        $this->assertEquals("ipv4", $obj->getIpv4());
    }

    /**
     * Test setIpv6()
     *
     * @return void
     */
    public function testSetIpv6(): void {

        $obj = new NetworkCard();

        $obj->setIpv6("ipv6");
        $this->assertEquals("ipv6", $obj->getIpv6());
    }

    /**
     * Test setMac()
     *
     * @return void
     */
    public function testSetMac(): void {

        $obj = new NetworkCard();

        $obj->setMac("mac");
        $this->assertEquals("mac", $obj->getMac());
    }

    /**
     * Test setSpeed()
     *
     * @return void
     */
    public function testSetSpeed(): void {

        $obj = new NetworkCard();

        $obj->setSpeed("speed");
        $this->assertEquals("speed", $obj->getSpeed());
    }

    /**
     * Test setStatus()
     *
     * @return void
     */
    public function testSetStatus(): void {

        $obj = new NetworkCard();

        $obj->setStatus("status");
        $this->assertEquals("status", $obj->getStatus());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NetworkCard();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(NetworkCardInterface::class, $obj);

        $this->assertNull($obj->getName());

        $this->assertNull($obj->getDuplex());
        $this->assertNull($obj->getIpv4());
        $this->assertNull($obj->getIpv6());
        $this->assertNull($obj->getMac());
        $this->assertNull($obj->getSpeed());
        $this->assertNull($obj->getStatus());
    }
}
