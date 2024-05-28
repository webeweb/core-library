<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Serializer\System;

use WBW\Library\Common\Model\System\CpuInterface;
use WBW\Library\Common\Model\System\HardDiskInterface;
use WBW\Library\Common\Model\System\MemoryInterface;
use WBW\Library\Common\Model\System\NetworkCardInterface;
use WBW\Library\Common\Model\System\NetworkInterface;
use WBW\Library\Common\Model\System\OperatingSystemInterface;
use WBW\Library\Common\Model\System\ProcessorInterface;
use WBW\Library\Common\Serializer\SerializerKeys;
use WBW\Library\Common\Serializer\System\JsonSerializer;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * JSON serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Serializer\System
 */
class JsonSerializerTest extends AbstractTestCase {

    /**
     * Test serializeCpu()
     *
     * @return void
     */
    public function testSerializeCpu(): void {

        // Set a Current processor usage mock.
        $model = $this->getMockBuilder(CpuInterface::class)->getMock();
        $model->expects($this->any())->method("getUs")->willReturn(0.1);
        $model->expects($this->any())->method("getSy")->willReturn(0.2);
        $model->expects($this->any())->method("getNi")->willReturn(0.3);
        $model->expects($this->any())->method("getId")->willReturn(0.4);
        $model->expects($this->any())->method("getWa")->willReturn(0.5);
        $model->expects($this->any())->method("getHi")->willReturn(0.6);
        $model->expects($this->any())->method("getSi")->willReturn(0.7);
        $model->expects($this->any())->method("getSt")->willReturn(0.8);

        $res = JsonSerializer::serializeCpu($model);
        $this->assertCount(8, $res);

        $this->assertEquals($model->getUs(), $res[SerializerKeys::US]);
        $this->assertEquals($model->getSy(), $res[SerializerKeys::SY]);
        $this->assertEquals($model->getNi(), $res[SerializerKeys::NI]);
        $this->assertEquals($model->getId(), $res[SerializerKeys::ID]);
        $this->assertEquals($model->getWa(), $res[SerializerKeys::WA]);
        $this->assertEquals($model->getHi(), $res[SerializerKeys::HI]);
        $this->assertEquals($model->getSi(), $res[SerializerKeys::SI]);
        $this->assertEquals($model->getSt(), $res[SerializerKeys::ST]);
    }

    /**
     * Test serializeHardDisk()
     *
     * @return void
     */
    public function testSerializeHardDisk(): void {

        // Set a Hard disk mock.
        $model = $this->getMockBuilder(HardDiskInterface::class)->getMock();
        $model->expects($this->any())->method("getAvailable")->willReturn(SerializerKeys::AVAILABLE);
        $model->expects($this->any())->method("getFileSystem")->willReturn(SerializerKeys::FILE_SYSTEM);
        $model->expects($this->any())->method("getMountedOn")->willReturn(SerializerKeys::MOUNTED_ON);
        $model->expects($this->any())->method("getName")->willReturn(SerializerKeys::NAME);
        $model->expects($this->any())->method("getType")->willReturn(SerializerKeys::TYPE);
        $model->expects($this->any())->method("getUsed")->willReturn(SerializerKeys::USED);
        $model->expects($this->any())->method("getUsePercent")->willReturn(SerializerKeys::USE_PERCENT);

        $res = JsonSerializer::serializeHardDisk($model);
        $this->assertCount(7, $res);

        $this->assertEquals($model->getAvailable(), $res[SerializerKeys::AVAILABLE]);
        $this->assertEquals($model->getFileSystem(), $res[SerializerKeys::FILE_SYSTEM]);
        $this->assertEquals($model->getMountedOn(), $res[SerializerKeys::MOUNTED_ON]);
        $this->assertEquals($model->getName(), $res[SerializerKeys::NAME]);
        $this->assertEquals($model->getType(), $res[SerializerKeys::TYPE]);
        $this->assertEquals($model->getUsed(), $res[SerializerKeys::USED]);
        $this->assertEquals($model->getUsePercent(), $res[SerializerKeys::USE_PERCENT]);
    }

    /**
     * Test serializeMemory()
     *
     * @return void
     */
    public function testSerializeMemory(): void {

        // Set a Memory mock.
        $model = $this->getMockBuilder(MemoryInterface::class)->getMock();
        $model->expects($this->any())->method("getValues")->willReturn([]);

        $res = JsonSerializer::serializeMemory($model);
        $this->assertCount(0, $res);

        $this->assertEquals($model->getValues(), $res);
    }

    /**
     * Test serializeNetwork()
     *
     * @return void
     */
    public function testSerializeNetwork(): void {

        // Set a Network mock.
        $model = $this->getMockBuilder(NetworkInterface::class)->getMock();
        $model->expects($this->any())->method("getDns")->willReturn(SerializerKeys::DNS);
        $model->expects($this->any())->method("getGateway")->willReturn(SerializerKeys::GATEWAY);
        $model->expects($this->any())->method("getHostname")->willReturn(SerializerKeys::HOSTNAME);

        $res = JsonSerializer::serializeNetwork($model);
        $this->assertCount(3, $res);

        $this->assertEquals($model->getDns(), $res[SerializerKeys::DNS]);
        $this->assertEquals($model->getGateway(), $res[SerializerKeys::GATEWAY]);
        $this->assertEquals($model->getHostname(), $res[SerializerKeys::HOSTNAME]);
    }

    /**
     * Test serializeNetworkCard()
     *
     * @return void
     */
    public function testSerializeNetworkCard(): void {

        // Set a Network card mock.
        $model = $this->getMockBuilder(NetworkCardInterface::class)->getMock();
        $model->expects($this->any())->method("getDuplex")->willReturn(SerializerKeys::DUPLEX);
        $model->expects($this->any())->method("getIpv4")->willReturn(SerializerKeys::IPV4);
        $model->expects($this->any())->method("getIpv6")->willReturn(SerializerKeys::IPV6);
        $model->expects($this->any())->method("getMac")->willReturn(SerializerKeys::MAC);
        $model->expects($this->any())->method("getName")->willReturn(SerializerKeys::NAME);
        $model->expects($this->any())->method("getSpeed")->willReturn(SerializerKeys::SPEED);
        $model->expects($this->any())->method("getStatus")->willReturn(SerializerKeys::STATUS);

        $res = JsonSerializer::serializeNetworkCard($model);
        $this->assertCount(7, $res);

        $this->assertEquals($model->getDuplex(), $res[SerializerKeys::DUPLEX]);
        $this->assertEquals($model->getIpv4(), $res[SerializerKeys::IPV4]);
        $this->assertEquals($model->getIpv6(), $res[SerializerKeys::IPV6]);
        $this->assertEquals($model->getMac(), $res[SerializerKeys::MAC]);
        $this->assertEquals($model->getName(), $res[SerializerKeys::NAME]);
        $this->assertEquals($model->getSpeed(), $res[SerializerKeys::SPEED]);
        $this->assertEquals($model->getStatus(), $res[SerializerKeys::STATUS]);
    }

    /**
     * Test serializeOperatingSystem()
     *
     * @return void
     */
    public function testSerializeOperatingSystem(): void {

        // Set an Operating system mock.
        $model = $this->getMockBuilder(OperatingSystemInterface::class)->getMock();
        $model->expects($this->any())->method("getCodename")->willReturn(SerializerKeys::CODENAME);
        $model->expects($this->any())->method("getDescription")->willReturn(SerializerKeys::DESCRIPTION);
        $model->expects($this->any())->method("getId")->willReturn(SerializerKeys::ID);
        $model->expects($this->any())->method("getRelease")->willReturn(SerializerKeys::RELEASE);

        $res = JsonSerializer::serializeOperatingSystem($model);
        $this->assertCount(4, $res);

        $this->assertEquals($model->getCodename(), $res[SerializerKeys::CODENAME]);
        $this->assertEquals($model->getDescription(), $res[SerializerKeys::DESCRIPTION]);
        $this->assertEquals($model->getId(), $res[SerializerKeys::ID]);
        $this->assertEquals($model->getRelease(), $res[SerializerKeys::RELEASE]);
    }

    /**
     * Test serializeProcessor()
     *
     * @return void
     */
    public function testSerializeProcessor(): void {

        // Set a Processor mock.
        $model = $this->getMockBuilder(ProcessorInterface::class)->getMock();
        $model->expects($this->any())->method("getValues")->willReturn([]);

        $res = JsonSerializer::serializeProcessor($model);
        $this->assertCount(0, $res);

        $this->assertEquals($model->getValues(), $res);
    }
}
