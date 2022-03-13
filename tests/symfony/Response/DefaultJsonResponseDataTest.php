<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Response;

use JsonSerializable;
use WBW\Library\Symfony\Response\DefaultJsonResponseData;
use WBW\Library\Symfony\Response\DefaultJsonResponseDataInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Default JSON response data test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Response
 */
class DefaultJsonResponseDataTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/DefaultJsonResponseDataTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new DefaultJsonResponseData();
        $obj->setData(["data"]);
        $obj->setErrors(["error"]);
        $obj->setMessage("message");
        $obj->setSuccess(true);

        $res = $obj->jsonSerialize();
        $this->assertCount(4, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests setSuccess()
     *
     * @return void
     */
    public function testSetSuccess(): void {

        $obj = new DefaultJsonResponseData();

        $obj->setSuccess(true);
        $this->assertTrue($obj->getSuccess());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new DefaultJsonResponseData();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(DefaultJsonResponseDataInterface::class, $obj);

        $this->assertNull($obj->getData());
        $this->assertNull($obj->getErrors());
        $this->assertNull($obj->getMessage());

        $this->assertNull($obj->getSuccess());
    }
}
