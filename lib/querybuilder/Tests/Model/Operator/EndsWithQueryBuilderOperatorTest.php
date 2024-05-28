<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\QueryBuilder\Tests\Model\Operator;

use WBW\Library\QueryBuilder\Model\Operator\EndsWithQueryBuilderOperator;
use WBW\Library\QueryBuilder\Model\QueryBuilderDecoratorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderOperatorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * Ends with QueryBuilder operator test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Model\Operator
 */
class EndsWithQueryBuilderOperatorTest extends AbstractTestCase {

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
        $rule->expects($this->any())->method("getValue")->willReturn("value");

        $obj = new EndsWithQueryBuilderOperator();

        $this->assertEquals("field LIKE '%value'", $obj->toSql($rule));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EndsWithQueryBuilderOperator();

        $this->assertInstanceOf(QueryBuilderOperatorInterface::class, $obj);
        $this->assertInstanceOf(QueryBuilderDecoratorInterface::class, $obj);

        $this->assertEquals(QueryBuilderOperatorInterface::OPERATOR_ENDS_WITH, $obj->getOperator());
    }
}
