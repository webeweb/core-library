<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\QueryBuilder\Tests\Serializer;

use WBW\Library\QueryBuilder\Model\QueryBuilderConditionInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderFilterSetInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderInputInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderOperatorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleSetInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;
use WBW\Library\QueryBuilder\Serializer\JsonDeserializer;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * JSON deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Serializer
 */
class JsonDeserializerTest extends AbstractTestCase {

    /**
     * Filter set.
     *
     * @var QueryBuilderFilterSetInterface|null
     */
    private $filterSet;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a QueryBuilder filter set mock.
        $this->filterSet = $this->getMockBuilder(QueryBuilderFilterSetInterface::class)->getMock();
    }

    /**
     * Test deserializeQueryBuilderRule()
     *
     * @return void
     */
    public function testDeserializeQueryBuilderRule(): void {

        // Set a JSON mock.
        $data = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeQueryBuilderRule.json");
        $json = json_decode($data, true);

        $res = JsonDeserializer::deserializeQueryBuilderRule($this->filterSet, $json);
        $this->assertInstanceOf(QueryBuilderRuleInterface::class, $res);

        $this->assertEquals("age", $res->getId());
        $this->assertEquals("age", $res->getField());
        $this->assertEquals(QueryBuilderInputInterface::INPUT_NUMBER, $res->getInput());
        $this->assertEquals(QueryBuilderOperatorInterface::OPERATOR_GREATER, $res->getOperator());
        $this->assertEquals(QueryBuilderTypeInterface::TYPE_INTEGER, $res->getType());
        $this->assertEquals(21, $res->getValue());
    }

    /**
     * Test deserializeQueryBuilderRuleSet()
     *
     * @return void
     */
    public function testDeserializeQueryBuilderRuleSet(): void {

        // Set a JSON mock.
        $data = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeQueryBuilderRuleSet.json");
        $json = json_decode($data, true);

        $res = JsonDeserializer::deserializeQueryBuilderRuleSet($this->filterSet, $json);
        $this->assertInstanceOf(QueryBuilderRuleSetInterface::class, $res);

        $this->assertEquals(QueryBuilderConditionInterface::CONDITION_OR, $res->getCondition());
        $this->assertCount(2, $res->getRules());
        $this->assertTrue($res->getValid());

        $this->assertInstanceOf(QueryBuilderRuleInterface::class, $res->getRules()[0]);

        $this->assertInstanceOf(QueryBuilderRuleSetInterface::class, $res->getRules()[1]);

        $this->assertCount(2, $res->getRules()[1]->getRules());

        $this->assertInstanceOf(QueryBuilderRuleInterface::class, $res->getRules()[1]->getRules()[0]);
        $this->assertInstanceOf(QueryBuilderRuleInterface::class, $res->getRules()[1]->getRules()[1]);
    }
}
