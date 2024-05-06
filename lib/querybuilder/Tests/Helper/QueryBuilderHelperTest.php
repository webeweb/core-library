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

namespace WBW\Library\QueryBuilder\Tests\Helper;

use WBW\Library\QueryBuilder\Helper\QueryBuilderHelper;
use WBW\Library\QueryBuilder\Model\QueryBuilderConditionInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderDecoratorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderFilterSetInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderInputInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderOperatorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;
use WBW\Library\QueryBuilder\Serializer\JsonDeserializer;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * QueryBuilder helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @packageWBW\Library\QueryBuilder\Tests\Helper
 */
class QueryBuilderHelperTest extends AbstractTestCase {

    /**
     * Test enumConditions()
     *
     * @return void
     */
    public function testEnumConditions(): void {

        $exp = [
            QueryBuilderConditionInterface::CONDITION_AND,
            QueryBuilderConditionInterface::CONDITION_OR,

        ];

        $this->assertEquals($exp, QueryBuilderHelper::enumConditions());
    }

    /**
     * Test enumInputs()
     *
     * @return void
     */
    public function testEnumInputs(): void {

        $exp = [
            QueryBuilderInputInterface::INPUT_CHECKBOX,
            QueryBuilderInputInterface::INPUT_NUMBER,
            QueryBuilderInputInterface::INPUT_RADIO,
            QueryBuilderInputInterface::INPUT_SELECT,
            QueryBuilderInputInterface::INPUT_TEXT,
            QueryBuilderInputInterface::INPUT_TEXTAREA,
        ];

        $this->assertEquals($exp, QueryBuilderHelper::enumInputs());
    }

    /**
     * Test enumTypes()
     *
     * @return void
     */
    public function testEnumTypes(): void {

        $exp = [
            QueryBuilderTypeInterface::TYPE_BOOLEAN,
            QueryBuilderTypeInterface::TYPE_DATE,
            QueryBuilderTypeInterface::TYPE_DATETIME,
            QueryBuilderTypeInterface::TYPE_DOUBLE,
            QueryBuilderTypeInterface::TYPE_INTEGER,
            QueryBuilderTypeInterface::TYPE_STRING,
            QueryBuilderTypeInterface::TYPE_TIME,
        ];

        $this->assertEquals($exp, QueryBuilderHelper::enumTypes());
    }

    /**
     * Test queryBuilderRule2Sql()
     *
     * @returns void
     */
    public function testQueryBuilderRule2Sql(): void {

        // Set a QueryBuilder rule mock.
        $obj = $this->getMockBuilder(QueryBuilderRuleInterface::class)->getMock();
        $obj->expects($this->any())->method("getField")->willReturn("field");
        $obj->expects($this->any())->method("getOperator")->willReturn(QueryBuilderOperatorInterface::OPERATOR_EQUAL);
        $obj->expects($this->any())->method("getType")->willReturn(QueryBuilderTypeInterface::TYPE_STRING);
        $obj->expects($this->any())->method("getValue")->willReturn("value");

        $this->assertEquals("field = 'value'", QueryBuilderHelper::queryBuilderRule2Sql($obj));
    }

    /**
     * Test queryBuilderRule2Sql()
     *
     * @returns void
     */
    public function testQueryBuilderRule2SqlWithDecorator(): void {

        // Set a QueryBuilder filter set mock.
        $decorator = $this->getMockBuilder(QueryBuilderDecoratorInterface::class)->getMock();

        // Set a QueryBuilder rule mock.
        $obj = $this->getMockBuilder(QueryBuilderRuleInterface::class)->getMock();
        $obj->expects($this->any())->method("getDecorator")->willReturn($decorator);

        $this->assertEquals("", QueryBuilderHelper::queryBuilderRule2Sql($obj));
    }

    /**
     * Test queryBuilderRuleSet2Sql()
     *
     * @returns void
     */
    public function testQueryBuilderRuleSet2Sql(): void {

        // Set a QueryBuilder filter set mock.
        $filterSet = $this->getMockBuilder(QueryBuilderFilterSetInterface::class)->getMock();

        // Set a data mock.
        $data = [
            "condition" => QueryBuilderConditionInterface::CONDITION_OR,
            "rules"     => [
                [
                    "id"       => "age",
                    "field"    => "age",
                    "input"    => QueryBuilderInputInterface::INPUT_NUMBER,
                    "operator" => QueryBuilderOperatorInterface::OPERATOR_GREATER,
                    "type"     => QueryBuilderTypeInterface::TYPE_INTEGER,
                    "value"    => "21",
                ],
                [
                    "condition" => QueryBuilderConditionInterface::CONDITION_AND,
                    "rules"     => [
                        [
                            "id"       => "firstname",
                            "field"    => "firstname",
                            "input"    => QueryBuilderInputInterface::INPUT_TEXT,
                            "operator" => QueryBuilderOperatorInterface::OPERATOR_EQUAL,
                            "type"     => QueryBuilderTypeInterface::TYPE_STRING,
                            "value"    => "John",
                        ],
                        [
                            "id"       => "lastname",
                            "field"    => "lastname",
                            "input"    => QueryBuilderInputInterface::INPUT_NUMBER,
                            "operator" => QueryBuilderOperatorInterface::OPERATOR_EQUAL,
                            "type"     => QueryBuilderTypeInterface::TYPE_STRING,
                            "value"    => "DOE",
                        ],
                    ],
                ],
            ],
            "valid"     => true,
        ];

        $obj = JsonDeserializer::deserializeQueryBuilderRuleSet($filterSet, $data);

        $res = "(age > 21 OR (firstname = 'John' AND lastname = 'DOE'))";
        $this->assertEquals($res, QueryBuilderHelper::queryBuilderRuleSet2Sql($obj));
    }

    /**
     * Test queryBuilderRuleSet2Sql()
     *
     * @returns void
     */
    public function testQueryBuilderRuleSet2SqlWithoutRules(): void {

        // Set a QueryBuilder filter set mock.
        $filterSet = $this->getMockBuilder(QueryBuilderFilterSetInterface::class)->getMock();

        $obj = JsonDeserializer::deserializeQueryBuilderRuleSet($filterSet, []);

        $this->assertEquals("", QueryBuilderHelper::queryBuilderRuleSet2Sql($obj));
    }
}
