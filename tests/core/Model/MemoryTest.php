<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model;

use JsonSerializable;
use WBW\Library\Core\Model\Memory;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Memory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Model
 */
class MemoryTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/MemoryTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new Memory();
        $obj->setTotal(7937068);
        $obj->setUsed(505772);
        $obj->setFree(5806944);
        $obj->setShared(50904);
        $obj->setBuffCache(1624352);
        $obj->setAvailable(7087700);

        $res = $obj->jsonSerialize();
        $this->assertCount(6, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests setAvailable()
     *
     * @return void
     */
    public function testSetAvailable(): void {

        $obj = new Memory();

        $obj->setAvailable(1234567890);
        $this->assertEquals(1234567890, $obj->getAvailable());
    }

    /**
     * Tests setBuffCache()
     *
     * @return void
     */
    public function testSetBuffCache(): void {

        $obj = new Memory();

        $obj->setBuffCache(1234567890);
        $this->assertEquals(1234567890, $obj->getBuffCache());
    }

    /**
     * Tests setFree()
     *
     * @return void
     */
    public function testSetFree(): void {

        $obj = new Memory();

        $obj->setFree(1234567890);
        $this->assertEquals(1234567890, $obj->getFree());
    }

    /**
     * Tests setShared()
     *
     * @return void
     */
    public function testSetShared(): void {

        $obj = new Memory();

        $obj->setShared(1234567890);
        $this->assertEquals(1234567890, $obj->getShared());
    }

    /**
     * Tests setTotal()
     *
     * @return void
     */
    public function testSetTotal(): void {

        $obj = new Memory();

        $obj->setTotal(1234567890);
        $this->assertEquals(1234567890, $obj->getTotal());
    }

    /**
     * Tests setUsed()
     *
     * @return void
     */
    public function testSetUsed(): void {

        $obj = new Memory();

        $obj->setUsed(1234567890);
        $this->assertEquals(1234567890, $obj->getUsed());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Memory();

        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getTotal());
        $this->assertNull($obj->getUsed());
        $this->assertNull($obj->getFree());
        $this->assertNull($obj->getShared());
        $this->assertNull($obj->getBuffCache());
        $this->assertNull($obj->getAvailable());
    }
}
