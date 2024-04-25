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

namespace WBW\Library\System\Tests\Model;

use JsonSerializable;
use WBW\Library\Common\Model\System\HardDiskInterface;
use WBW\Library\Common\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\System\Model\HardDisk;
use WBW\Library\System\Serializer\SerializerKeys;
use WBW\Library\System\Tests\AbstractTestCase;

/**
 * Hard disk test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
 */
class HardDiskTest extends AbstractTestCase {

    /**
     * Test getAvailable()
     *
     * @return void
     */
    public function testGetAvailable(): void {

        $obj = new HardDisk();

        $obj->setAvailable("available");
        $this->assertEquals("available", $obj->getAvailable());
    }

    /**
     * Test getFs()
     *
     * @return void
     */
    public function testGetFs(): void {

        $obj = new HardDisk();

        $obj->setFileSystem("fileSystem");
        $this->assertEquals("fileSystem", $obj->getFileSystem());
    }

    /**
     * Test getMountedOn()
     *
     * @return void
     */
    public function testGetMountedOn(): void {

        $obj = new HardDisk();

        $obj->setMountedOn("mountedOn");
        $this->assertEquals("mountedOn", $obj->getMountedOn());
    }

    /**
     * Test getUsePercent()
     *
     * @return void
     */
    public function testGetUsePercent(): void {

        $obj = new HardDisk();

        $obj->setUsePercent("usePercent");
        $this->assertEquals("usePercent", $obj->getUsePercent());
    }

    /**
     * Test getUsed()
     *
     * @return void
     */
    public function testGetUsed(): void {

        $obj = new HardDisk();

        $obj->setUsed("used");
        $this->assertEquals("used", $obj->getUsed());
    }

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize() {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/HardDiskTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new HardDisk();
        $obj->setAvailable(SerializerKeys::AVAILABLE);
        $obj->setFileSystem(SerializerKeys::FILE_SYSTEM);
        $obj->setMountedOn(SerializerKeys::MOUNTED_ON);
        $obj->setName(BaseSerializerKeys::NAME);
        $obj->setType(BaseSerializerKeys::TYPE);
        $obj->setUsed(SerializerKeys::USED);
        $obj->setUsePercent(SerializerKeys::USE_PERCENT);

        $res = $obj->jsonSerialize();
        $this->assertCount(7, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj = new HardDisk();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(HardDiskInterface::class, $obj);

        $this->assertNull($obj->getName());
        $this->assertNull($obj->getType());

        $this->assertNull($obj->getAvailable());
        $this->assertNull($obj->getFileSystem());
        $this->assertNull($obj->getMountedOn());
        $this->assertNull($obj->getUsed());
        $this->assertNull($obj->getUsePercent());
    }
}
