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
use WBW\Library\Common\Model\System\Processor;
use WBW\Library\Common\Model\System\ProcessorInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Processor test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\System
 */
class ProcessorTest extends AbstractTestCase {

    /**
     * Test getKeys()
     *
     * @return void
     */
    public function testGetKeys(): void {

        $obj = new Processor(["key" => "value"]);

        $this->assertEquals(["key"], $obj->getKeys());
    }

    /**
     * Test getValue()
     *
     * @return void
     */
    public function testGetValue(): void {

        $obj = new Processor(["key" => "value"]);

        $this->assertEquals("value", $obj->getValue("key"));
        $this->assertNull($obj->getValue("test"));
    }

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Processor(["key" => "value"]);

        $this->assertEquals($obj->getValues(), $obj->jsonSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Processor([]);

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(ProcessorInterface::class, $obj);

        $this->assertEquals([], $obj->getValues());
    }
}
