<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\QueryBuilder\Tests\Serializer;

use WBW\Library\QueryBuilder\Model\QueryBuilderFilterInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderFilterSetInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderInputInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderOperatorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderValidationInterface;
use WBW\Library\QueryBuilder\Serializer\JsonSerializer;
use WBW\Library\QueryBuilder\Serializer\SerializerKeys;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * JSON serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Serializer
 */
class JsonSerializerTest extends AbstractTestCase {

    /**
     * Test serializeQueryBuilderFilter()
     *
     * @return void
     */
    public function testSerializeQueryBuilderFilter(): void {

        // Set a QueryBuilder validation mock.
        $validation = $this->getMockBuilder(QueryBuilderValidationInterface::class)->getMock();
        $validation->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeQueryBuilderValidation($validation));

        // Set a QueryBuilder filter mock.
        $model = $this->getMockBuilder(QueryBuilderFilterInterface::class)->getMock();
        $model->expects($this->any())->method("getId")->willReturn(SerializerKeys::ID);
        $model->expects($this->any())->method("getField")->willReturn(SerializerKeys::FIELD);
        $model->expects($this->any())->method("getInput")->willReturn(QueryBuilderInputInterface::INPUT_NUMBER);
        $model->expects($this->any())->method("getLabel")->willReturn(SerializerKeys::LABEL);
        $model->expects($this->any())->method("getMultiple")->willReturn(true);
        $model->expects($this->any())->method("getOperators")->willReturn([QueryBuilderOperatorInterface::OPERATOR_EQUAL]);
        $model->expects($this->any())->method("getType")->willReturn(QueryBuilderTypeInterface::TYPE_STRING);
        $model->expects($this->any())->method("getValidation")->willReturn($validation);
        $model->expects($this->any())->method("getValues")->willReturn([SerializerKeys::VALUES]);

        $res = JsonSerializer::serializeQueryBuilderFilter($model);
        $this->assertCount(9, $res);

        $this->assertEquals($model->getId(), $res[SerializerKeys::ID]);
        $this->assertEquals($model->getField(), $res[SerializerKeys::FIELD]);
        $this->assertEquals($model->getInput(), $res[SerializerKeys::INPUT]);
        $this->assertEquals($model->getLabel(), $res[SerializerKeys::LABEL]);
        $this->assertEquals($model->getMultiple(), $res[SerializerKeys::MULTIPLE]);
        $this->assertEquals($model->getOperators(), $res[SerializerKeys::OPERATORS]);
        $this->assertEquals($model->getType(), $res[SerializerKeys::TYPE]);
        $this->assertIsArray($res[SerializerKeys::VALIDATION]);
        $this->assertEquals($model->getValues(), $res[SerializerKeys::VALUES]);
    }

    /**
     * Test serializeQueryBuilderSet()
     *
     * @return void
     */
    public function testSerializeQueryBuilderFilterSet(): void {

        // Set a QueryBuilder filter mock.
        $filter = $this->getMockBuilder(QueryBuilderFilterInterface::class)->getMock();
        $filter->expects($this->any())->method("getId")->willReturn(SerializerKeys::ID);
        $filter->expects($this->any())->method("getType")->willReturn(QueryBuilderTypeInterface::TYPE_STRING);
        $filter->expects($this->any())->method("getOperators")->willReturn([QueryBuilderOperatorInterface::OPERATOR_EQUAL]);
        $filter->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeQueryBuilderFilter($filter));

        // Set a QueryBuilder filter set mock.
        $model = $this->getMockBuilder(QueryBuilderFilterSetInterface::class)->getMock();
        $model->expects($this->any())->method("getFilters")->willReturn([$filter]);

        $res = JsonSerializer::serializeQueryBuilderFilterSet($model);
        $this->assertCount(1, $res);

        $this->assertEquals($filter->getId(), $res[0][SerializerKeys::ID]);
        $this->assertEquals($filter->getLabel(), $res[0][SerializerKeys::LABEL]);
        $this->assertEquals($filter->getOperators(), $res[0][SerializerKeys::OPERATORS]);
        $this->assertEquals($filter->getType(), $res[0][SerializerKeys::TYPE]);
    }

    /**
     * Test serializeQueryBuilderValidation()
     *
     * @return void
     */
    public function testSerializeQueryBuilderValidation(): void {

        // Set a QueryBuilder validation mock.
        $model = $this->getMockBuilder(QueryBuilderValidationInterface::class)->getMock();
        $model->expects($this->any())->method("getAllowEmptyValue")->willReturn(true);
        $model->expects($this->any())->method("getCallback")->willReturn(SerializerKeys::CALLBACK);
        $model->expects($this->any())->method("getFormat")->willReturn(SerializerKeys::FORMAT);
        $model->expects($this->any())->method("getMax")->willReturn(SerializerKeys::MAX);
        $model->expects($this->any())->method("getMessages")->willReturn([]);
        $model->expects($this->any())->method("getMin")->willReturn(SerializerKeys::MIN);
        $model->expects($this->any())->method("getStep")->willReturn(0);

        $res = JsonSerializer::serializeQueryBuilderValidation($model);
        $this->assertCount(7, $res);

        $this->assertEquals($model->getAllowEmptyValue(), $res[SerializerKeys::ALLOW_EMPTY_VALUE]);
        $this->assertEquals($model->getCallback(), $res[SerializerKeys::CALLBACK]);
        $this->assertEquals($model->getFormat(), $res[SerializerKeys::FORMAT]);
        $this->assertEquals($model->getMax(), $res[SerializerKeys::MAX]);
        $this->assertEquals($model->getMessages(), $res[SerializerKeys::MESSAGES]);
        $this->assertEquals($model->getMin(), $res[SerializerKeys::MIN]);
        $this->assertEquals($model->getStep(), $res[SerializerKeys::STEP]);
    }
}
