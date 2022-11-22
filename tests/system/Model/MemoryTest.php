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
use WBW\Library\System\Model\Memory;
use WBW\Library\System\Model\MemoryInterface;
use WBW\Library\System\Tests\AbstractTestCase;

/**
 * Memory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
 */
class MemoryTest extends AbstractTestCase {

    /**
     * Tests getKeys()
     *
     * @return void
     */
    public function testGetKeys(): void {

        $obj = new Memory(["key" => 0]);

        $this->assertEquals(["key"], $obj->getKeys());
    }

    /**
     * Tests getValue()
     *
     * @return void
     */
    public function testGetValue(): void {

        $obj = new Memory(["key" => 0]);

        $this->assertEquals(0, $obj->getValue("key"));
        $this->assertNull($obj->getValue("test"));
    }

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Memory(["key" => 0]);

        $this->assertEquals($obj->getValues(), $obj->jsonSerialize());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Memory([]);

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(MemoryInterface::class, $obj);

        $this->assertEquals([], $obj->getValues());

        $this->assertNull($obj->getMemAvailable());
        $this->assertNull($obj->getMemFree());
        $this->assertNull($obj->getMemTotal());
        $this->assertNull($obj->getSwapFree());
        $this->assertNull($obj->getSwapTotal());
    }
}
