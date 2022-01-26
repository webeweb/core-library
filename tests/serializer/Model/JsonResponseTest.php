<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer\Tests\Model;

use JsonSerializable;
use WBW\Library\Serializer\Model\JsonResponse;
use WBW\Library\Serializer\Tests\AbstractTestCase;

/**
 * JSON response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Tests\Model
 */
class JsonResponseTest extends AbstractTestCase {

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new JsonResponse();
        $obj->setSuccess(false);
        $obj->setData([true, 0.1, 2, "string"]);
        $obj->setMessage("message");
        $obj->setErrors(["error"]);

        $exp = [
            "success" => false,
            "data"    => [true, 0.1, 2, "string"],
            "message" => "message",
            "errors"  => ["error"],
        ];

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests the setData() method.
     *
     * @return void
     */
    public function testSetData(): void {

        $obj = new JsonResponse();

        $obj->setData(["data"]);
        $this->assertEquals(["data"], $obj->getData());
    }

    /**
     * Tests the setErrors() method.
     *
     * @return void
     */
    public function testSetErrors(): void {

        $obj = new JsonResponse();

        $obj->setErrors(["error"]);
        $this->assertEquals(["error"], $obj->getErrors());
    }

    /**
     * Tests the setMessage() method.
     *
     * @return void
     */
    public function testSetMessage(): void {

        $obj = new JsonResponse();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }

    /**
     * Tests the setSuccess() method.
     *
     * @return void
     */
    public function testSetSuccess(): void {

        $obj = new JsonResponse();

        $obj->setSuccess(true);
        $this->assertTrue($obj->getSuccess());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new JsonResponse();

        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getData());
        $this->assertNull($obj->getErrors());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getSuccess());
    }
}
