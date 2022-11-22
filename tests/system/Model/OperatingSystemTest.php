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
use WBW\Library\System\Model\OperatingSystem;
use WBW\Library\System\Model\OperatingSystemInterface;
use WBW\Library\System\Serializer\SerializerKeys;
use WBW\Library\System\Tests\AbstractTestCase;

/**
 * Operating system test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
 */
class OperatingSystemTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/OperatingSystemTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new OperatingSystem();
        $obj->setCodename(SerializerKeys::CODENAME);
        $obj->setDescription(BaseSerializerKeys::DESCRIPTION);
        $obj->setId(BaseSerializerKeys::ID);
        $obj->setRelease(SerializerKeys::RELEASE);

        $res = $obj->jsonSerialize();
        $this->assertCount(4, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests setCodename()
     *
     * @return void
     */
    public function testSetCodename(): void {

        $obj = new OperatingSystem();

        $obj->setCodename("codename");
        $this->assertEquals("codename", $obj->getCodename());
    }

    /**
     * Tests setRelease()
     *
     * @return void
     */
    public function testSetRelease(): void {

        $obj = new OperatingSystem();

        $obj->setRelease("release");
        $this->assertEquals("release", $obj->getRelease());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new OperatingSystem();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(OperatingSystemInterface::class, $obj);

        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getId());

        $this->assertNull($obj->getCodename());
        $this->assertNull($obj->getRelease());
    }
}
