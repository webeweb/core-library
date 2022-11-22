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

use WBW\Library\System\Model\Network;
use WBW\Library\System\Model\NetworkInterface;
use WBW\Library\System\Serializer\SerializerKeys;
use WBW\Library\System\Tests\AbstractTestCase;
use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;

/**
 * Network test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
 */
class NetworkTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/NetworkTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new Network();
        $obj->setDns(SerializerKeys::DNS);
        $obj->setGateway(SerializerKeys::GATEWAY);
        $obj->setHostname(BaseSerializerKeys::HOSTNAME);

        $res = $obj->jsonSerialize();
        $this->assertCount(3, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests setDns()
     *
     * @return void
     */
    public function testSetDns(): void {

        $obj = new Network();

        $obj->setDns("dns");
        $this->assertEquals("dns", $obj->getDns());
    }

    /**
     * Tests setGateway()
     *
     * @return void
     */
    public function testSetGateway(): void {

        $obj = new Network();

        $obj->setGateway("gateway");
        $this->assertEquals("gateway", $obj->getGateway());
    }

    /**
     * Tests setHostname()
     *
     * @return void
     */
    public function testSetHostname(): void {

        $obj = new Network();

        $obj->setHostname("hostname");
        $this->assertEquals("hostname", $obj->getHostname());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Network();

        $this->assertInstanceOf(NetworkInterface::class, $obj);

        $this->assertNull($obj->getHostname());
        $this->assertNull($obj->getGateway());
        $this->assertNull($obj->getDns());
    }
}
