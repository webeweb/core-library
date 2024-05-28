<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Serializer\Request;

use DateTime;
use WBW\Library\Common\Model\Request\RequestDetailInterface;
use WBW\Library\Common\Serializer\Request\JsonSerializer;
use WBW\Library\Common\Serializer\SerializerKeys;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * JSON serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Serializer\Request
 */
class JsonSerializerTest extends AbstractTestCase {

    /**
     * Test serializeRequestDetail()
     *
     * @return void
     */
    public function testSerializeRequestDetail(): void {

        // Set a date mock.
        $date = new DateTime();

        // Set a Request detail mock.
        $model = $this->getMockBuilder(RequestDetailInterface::class)->getMock();
        $model->expects($this->any())->method("getId")->willReturn(1);
        $model->expects($this->any())->method("getDataGet")->willReturn(SerializerKeys::DATA_GET);
        $model->expects($this->any())->method("getDataPost")->willReturn(SerializerKeys::DATA_POST);
        $model->expects($this->any())->method("getDate")->willReturn($date);
        $model->expects($this->any())->method("getIpAddress")->willReturn(SerializerKeys::IP_ADDRESS);
        $model->expects($this->any())->method("getMethod")->willReturn(SerializerKeys::METHOD);
        $model->expects($this->any())->method("getRoute")->willReturn(SerializerKeys::ROUTE);
        $model->expects($this->any())->method("getUrl")->willReturn(SerializerKeys::URL);
        $model->expects($this->any())->method("getUserAgent")->willReturn(SerializerKeys::USER_AGENT);
        $model->expects($this->any())->method("getXmlHttp")->willReturn(true);

        $res = JsonSerializer::serializeRequestDetail($model);
        $this->assertCount(10, $res);

        $this->assertEquals($model->getId(), $res[SerializerKeys::ID]);
        $this->assertEquals($model->getDataGet(), $res[SerializerKeys::DATA_GET]);
        $this->assertEquals($model->getDataPost(), $res[SerializerKeys::DATA_POST]);
        $this->assertSame($model->getDate(), $res[SerializerKeys::DATE]);
        $this->assertEquals($model->getIpAddress(), $res[SerializerKeys::IP_ADDRESS]);
        $this->assertEquals($model->getMethod(), $res[SerializerKeys::METHOD]);
        $this->assertEquals($model->getRoute(), $res[SerializerKeys::ROUTE]);
        $this->assertEquals($model->getUrl(), $res[SerializerKeys::URL]);
        $this->assertEquals($model->getUserAgent(), $res[SerializerKeys::USER_AGENT]);
        $this->assertEquals($model->getXmlHttp(), $res[SerializerKeys::XML_HTTP]);
    }
}
