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

namespace WBW\Library\QueryBuilder\Tests\Model\Operator;

use WBW\Library\QueryBuilder\Model\Operator\NotBetweenQueryBuilderOperator;
use WBW\Library\QueryBuilder\Model\QueryBuilderDecoratorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderOperatorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * Not between QueryBuilder operator test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Model\Operator
 */
class NotBetweenQueryBuilderOperatorTest extends AbstractTestCase {

    /**
     * Test toSql()
     *
     * @return void
     */
    public function testToSql(): void {

        // Set a QueryBuilder rule mock.
        $rule = $this->getMockBuilder(QueryBuilderRuleInterface::class)->getMock();
        $rule->expects($this->any())->method("getField")->willReturn("field");
        $rule->expects($this->any())->method("getType")->willReturn(QueryBuilderTypeInterface::TYPE_STRING);
        $rule->expects($this->any())->method("getValue")->willReturn(["value1", "value2"]);

        $obj = new NotBetweenQueryBuilderOperator();

        $this->assertEquals("field NOT BETWEEN 'value1' AND 'value2'", $obj->toSql($rule));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NotBetweenQueryBuilderOperator();

        $this->assertInstanceOf(QueryBuilderOperatorInterface::class, $obj);
        $this->assertInstanceOf(QueryBuilderDecoratorInterface::class, $obj);

        $this->assertEquals(QueryBuilderOperatorInterface::OPERATOR_NOT_BETWEEN, $obj->getOperator());
    }
}
