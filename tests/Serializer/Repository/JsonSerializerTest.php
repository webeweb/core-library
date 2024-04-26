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

namespace WBW\Library\Common\Tests\Serializer\Repository;

use DateTime;
use WBW\Library\Common\Model\Repository\RepositoryEventInterface;
use WBW\Library\Common\Serializer\Repository\JsonSerializer;
use WBW\Library\Common\Serializer\SerializerKeys;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * JSON serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Serializer\Repository
 */
class JsonSerializerTest extends AbstractTestCase {

    /**
     * Test serializeRepositoryEvent()
     *
     * @return void
     */
    public function testSerializeRepositoryEvent(): void {

        // Set a date mock.
        $date = new DateTime();

        // Set a Repository event mock.
        $model = $this->getMockBuilder(RepositoryEventInterface::class)->getMock();
        $model->expects($this->any())->method("getId")->willReturn(1);
        $model->expects($this->any())->method("getDate")->willReturn($date);
        $model->expects($this->any())->method("getEntity")->willReturn(SerializerKeys::ENTITY);
        $model->expects($this->any())->method("getEntityData")->willReturn(SerializerKeys::ENTITY_DATA);
        $model->expects($this->any())->method("getEntityId")->willReturn(SerializerKeys::ENTITY_ID);
        $model->expects($this->any())->method("getIpAddress")->willReturn(SerializerKeys::IP_ADDRESS);
        $model->expects($this->any())->method("getRequestDataGet")->willReturn(SerializerKeys::REQUEST_DATA_GET);
        $model->expects($this->any())->method("getRequestDataPost")->willReturn(SerializerKeys::REQUEST_DATA_POST);
        $model->expects($this->any())->method("getRequestMethod")->willReturn(SerializerKeys::REQUEST_METHOD);
        $model->expects($this->any())->method("getRequestRoute")->willReturn(SerializerKeys::REQUEST_ROUTE);
        $model->expects($this->any())->method("getRequestUrl")->willReturn(SerializerKeys::REQUEST_URL);
        $model->expects($this->any())->method("getType")->willReturn(SerializerKeys::TYPE);

        $res = JsonSerializer::serializeRepositoryEvent($model);
        $this->assertCount(12, $res);

        $this->assertEquals($model->getId(), $res[SerializerKeys::ID]);
        $this->assertSame($model->getDate(), $res[SerializerKeys::DATE]);
        $this->assertEquals($model->getEntity(), $res[SerializerKeys::ENTITY]);
        $this->assertEquals($model->getEntityData(), $res[SerializerKeys::ENTITY_DATA]);
        $this->assertEquals($model->getEntityId(), $res[SerializerKeys::ENTITY_ID]);
        $this->assertEquals($model->getIpAddress(), $res[SerializerKeys::IP_ADDRESS]);
        $this->assertEquals($model->getRequestDataGet(), $res[SerializerKeys::REQUEST_DATA_GET]);
        $this->assertEquals($model->getRequestDataPost(), $res[SerializerKeys::REQUEST_DATA_POST]);
        $this->assertEquals($model->getRequestMethod(), $res[SerializerKeys::REQUEST_METHOD]);
        $this->assertEquals($model->getRequestRoute(), $res[SerializerKeys::REQUEST_ROUTE]);
        $this->assertEquals($model->getRequestUrl(), $res[SerializerKeys::REQUEST_URL]);
        $this->assertEquals($model->getType(), $res[SerializerKeys::TYPE]);
    }
}
