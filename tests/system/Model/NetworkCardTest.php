<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Tests\Model;

use JsonSerializable;
use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\System\Model\NetworkCard;
use WBW\Library\System\Model\NetworkCardInterface;
use WBW\Library\System\Serializer\SerializerKeys;
use WBW\Library\System\Tests\AbstractTestCase;

/**
 * Network card test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
 */
class NetworkCardTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/NetworkCardTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new NetworkCard();
        $obj->setDuplex(SerializerKeys::DUPLEX);
        $obj->setIpv4(SerializerKeys::IPV4);
        $obj->setIpv6(SerializerKeys::IPV6);
        $obj->setMac(SerializerKeys::MAC);
        $obj->setName(BaseSerializerKeys::NAME);
        $obj->setSpeed(SerializerKeys::SPEED);
        $obj->setStatus(SerializerKeys::STATUS);

        $res = $obj->jsonSerialize();
        $this->assertCount(7, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests setDuplex()
     *
     * @return void
     */
    public function testSetDuplex(): void {

        $obj = new NetworkCard();

        $obj->setDuplex("duplex");
        $this->assertEquals("duplex", $obj->getDuplex());
    }

    /**
     * Tests setIpv4()
     *
     * @return void
     */
    public function testSetIpv4(): void {

        $obj = new NetworkCard();

        $obj->setIpv4("ipv4");
        $this->assertEquals("ipv4", $obj->getIpv4());
    }

    /**
     * Tests setIpv6()
     *
     * @return void
     */
    public function testSetIpv6(): void {

        $obj = new NetworkCard();

        $obj->setIpv6("ipv6");
        $this->assertEquals("ipv6", $obj->getIpv6());
    }

    /**
     * Tests setMac()
     *
     * @return void
     */
    public function testSetMac(): void {

        $obj = new NetworkCard();

        $obj->setMac("mac");
        $this->assertEquals("mac", $obj->getMac());
    }

    /**
     * Tests setSpeed()
     *
     * @return void
     */
    public function testSetSpeed(): void {

        $obj = new NetworkCard();

        $obj->setSpeed("speed");
        $this->assertEquals("speed", $obj->getSpeed());
    }

    /**
     * Tests setStatus()
     *
     * @return void
     */
    public function testSetStatus(): void {

        $obj = new NetworkCard();

        $obj->setStatus("status");
        $this->assertEquals("status", $obj->getStatus());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NetworkCard();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(NetworkCardInterface::class, $obj);

        $this->assertNull($obj->getDuplex());
        $this->assertNull($obj->getIpv4());
        $this->assertNull($obj->getIpv6());
        $this->assertNull($obj->getMac());
        $this->assertNull($obj->getName());
        $this->assertNull($obj->getSpeed());
        $this->assertNull($obj->getStatus());
    }
}
