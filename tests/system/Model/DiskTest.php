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
use WBW\Library\System\Model\Disk;
use WBW\Library\System\Model\DiskInterface;
use WBW\Library\System\Serializer\SerializerKeys;
use WBW\Library\System\Tests\AbstractTestCase;

/**
 * Disk test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
 */
class DiskTest extends AbstractTestCase {

    /**
     * Tests getAvailable()
     *
     * @return void
     */
    public function testGetAvailable(): void {

        $obj = new Disk();

        $obj->setAvailable("available");
        $this->assertEquals("available", $obj->getAvailable());
    }

    /**
     * Tests getFs()
     *
     * @return void
     */
    public function testGetFs(): void {

        $obj = new Disk();

        $obj->setFs("fs");
        $this->assertEquals("fs", $obj->getFs());
    }

    /**
     * Tests getMount()
     *
     * @return void
     */
    public function testGetMount(): void {

        $obj = new Disk();

        $obj->setMount("mount");
        $this->assertEquals("mount", $obj->getMount());
    }

    /**
     * Tests getPercent()
     *
     * @return void
     */
    public function testGetPercent(): void {

        $obj = new Disk();

        $obj->setPercent("percent");
        $this->assertEquals("percent", $obj->getPercent());
    }

    /**
     * Tests getUsed()
     *
     * @return void
     */
    public function testGetUsed(): void {

        $obj = new Disk();

        $obj->setUsed("used");
        $this->assertEquals("used", $obj->getUsed());
    }

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize() {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/DiskTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new Disk();
        $obj->setAvailable(SerializerKeys::AVAILABLE);
        $obj->setFs(SerializerKeys::FS);
        $obj->setMount(SerializerKeys::MOUNT);
        $obj->setName(BaseSerializerKeys::NAME);
        $obj->setPercent(SerializerKeys::PERCENT);
        $obj->setUsed(SerializerKeys::USED);

        $res = $obj->jsonSerialize();
        $this->assertCount(6, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Disk();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(DiskInterface::class, $obj);

        $this->assertNull($obj->getName());

        $this->assertNull($obj->getAvailable());
        $this->assertNull($obj->getFs());
        $this->assertNull($obj->getMount());
        $this->assertNull($obj->getPercent());
        $this->assertNull($obj->getUsed());
    }
}
