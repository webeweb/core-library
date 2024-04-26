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

namespace WBW\Library\Common\Tests\Model\Response;

use JsonSerializable;
use WBW\Library\Common\Model\Response\SimpleJsonResponseData;
use WBW\Library\Common\Model\Response\SimpleJsonResponseDataInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Simple JSON response data test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\Response
 */
class SimpleJsonResponseDataTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new SimpleJsonResponseData();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setNotify()
     *
     * @return void
     */
    public function testSetNotify(): void {

        $obj = new SimpleJsonResponseData();

        $obj->setNotify("notify");
        $this->assertEquals("notify", $obj->getNotify());
    }

    /**
     * Test setStatus()
     *
     * @return void
     */
    public function testSetStatus(): void {

        $obj = new SimpleJsonResponseData();

        $obj->setStatus(200);
        $this->assertEquals(200, $obj->getStatus());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new SimpleJsonResponseData();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(SimpleJsonResponseDataInterface::class, $obj);

        $this->assertNull($obj->getNotify());
        $this->assertNull($obj->getStatus());
    }
}
