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

namespace WBW\Library\QueryBuilder\Tests\Model\Type;

use WBW\Library\QueryBuilder\Model\QueryBuilderDecoratorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;
use WBW\Library\QueryBuilder\Model\Type\DateTimeQueryBuilderType;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * DateTime QueryBuilder type test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Model\Type
 */
class DateTimeQueryBuilderTypeTest extends AbstractTestCase {

    /**
     * Test toSql()
     *
     * @return void
     */
    public function testToSql(): void {

        // Set a QueryBuilder rule mock.
        $rule = $this->getMockBuilder(QueryBuilderRuleInterface::class)->getMock();
        $rule->expects($this->any())->method("getValue")->willReturn("2019-06-14 18:00:00");

        $obj = new DateTimeQueryBuilderType();

        $this->assertEquals("2019-06-14 18:00:00", $obj->toSql($rule));
    }

    /**
     * Test toSql()
     *
     * @return void
     */
    public function testToSqlWithWrap(): void {

        // Set a QueryBuilder rule mock.
        $rule = $this->getMockBuilder(QueryBuilderRuleInterface::class)->getMock();
        $rule->expects($this->any())->method("getValue")->willReturn("2019-06-14 18:00:00");

        $obj = new DateTimeQueryBuilderType();

        $this->assertEquals("'2019-06-14 18:00:00'", $obj->toSql($rule, true));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DateTimeQueryBuilderType();

        $this->assertInstanceOf(QueryBuilderTypeInterface::class, $obj);
        $this->assertInstanceOf(QueryBuilderDecoratorInterface::class, $obj);

        $this->assertEquals(QueryBuilderTypeInterface::TYPE_DATETIME, $obj->getType());
    }
}
