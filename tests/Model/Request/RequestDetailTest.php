<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Model\Request;

use JsonSerializable;
use WBW\Library\Common\Model\Request\RequestDetail;
use WBW\Library\Common\Model\Request\RequestDetailInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Repository event test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class RequestDetailTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new RequestDetail();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setDataGet()
     *
     * @return void
     */
    public function testSetDataGet(): void {

        $obj = new RequestDetail();

        $obj->setDataGet("dataGet");
        $this->assertEquals("dataGet", $obj->getDataGet());
    }

    /**
     * Test setDataPost()
     *
     * @return void
     */
    public function testSetDataPost(): void {

        $obj = new RequestDetail();

        $obj->setDataPost("dataPost");
        $this->assertEquals("dataPost", $obj->getDataPost());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RequestDetail();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(RequestDetailInterface::class, $obj);

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getIpAddress());
        $this->assertNull($obj->getMethod());
        $this->assertNull($obj->getRoute());
        $this->assertNull($obj->getUrl());
        $this->assertNull($obj->getUserAgent());

        $this->assertNull($obj->getDataGet());
        $this->assertNull($obj->getDataPost());
    }
}
