<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Serializer\Response;

use WBW\Library\Common\Model\Response\DefaultJsonResponseDataInterface;
use WBW\Library\Common\Model\Response\SimpleJsonResponseDataInterface;
use WBW\Library\Common\Serializer\Response\JsonSerializer;
use WBW\Library\Common\Serializer\SerializerKeys;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * JSON serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Serializer\Response
 */
class JsonSerializerTest extends AbstractTestCase {

    /**
     * Test serializeDefaultJsonResponseData()
     *
     * @return void
     */
    public function testSerializeDefaultJsonResponseData(): void {

        // Set a Default JSON response data mock.
        $model = $this->getMockBuilder(DefaultJsonResponseDataInterface::class)->getMock();
        $model->expects($this->any())->method("getSuccess")->willReturn(true);
        $model->expects($this->any())->method("getData")->willReturn([]);
        $model->expects($this->any())->method("getMessage")->willReturn(SerializerKeys::MESSAGE);
        $model->expects($this->any())->method("getErrors")->willReturn([]);

        $res = JsonSerializer::serializeDefaultJsonResponseData($model);
        $this->assertCount(4, $res);

        $this->assertEquals($model->getSuccess(), $res[SerializerKeys::SUCCESS]);
        $this->assertEquals($model->getData(), $res[SerializerKeys::DATA]);
        $this->assertEquals($model->getMessage(), $res[SerializerKeys::MESSAGE]);
        $this->assertEquals($model->getErrors(), $res[SerializerKeys::ERRORS]);
    }

    /**
     * Test serializeSimpleJsonResponseData()
     *
     * @return void
     */
    public function testSerializeSimpleJsonResponseData(): void {

        // Set a Simple JSON response data mock.
        $model = $this->getMockBuilder(SimpleJsonResponseDataInterface::class)->getMock();
        $model->expects($this->any())->method("getNotify")->willReturn(SerializerKeys::NOTIFY);
        $model->expects($this->any())->method("getStatus")->willReturn(1);

        $res = JsonSerializer::serializeSimpleJsonResponseData($model);
        $this->assertCount(2, $res);

        $this->assertEquals($model->getNotify(), $res[SerializerKeys::NOTIFY]);
        $this->assertEquals($model->getStatus(), $res[SerializerKeys::STATUS]);
    }
}
