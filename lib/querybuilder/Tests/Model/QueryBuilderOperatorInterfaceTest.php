<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\QueryBuilder\Tests\Model;

use WBW\Library\QueryBuilder\Model\QueryBuilderOperatorInterface;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * QueryBuilder operator interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Model
 */
class QueryBuilderOperatorInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("begins_with", QueryBuilderOperatorInterface::OPERATOR_BEGINS_WITH);
        $this->assertEquals("between", QueryBuilderOperatorInterface::OPERATOR_BETWEEN);
        $this->assertEquals("contains", QueryBuilderOperatorInterface::OPERATOR_CONTAINS);
        $this->assertEquals("ends_with", QueryBuilderOperatorInterface::OPERATOR_ENDS_WITH);
        $this->assertEquals("equal", QueryBuilderOperatorInterface::OPERATOR_EQUAL);
        $this->assertEquals("greater", QueryBuilderOperatorInterface::OPERATOR_GREATER);
        $this->assertEquals("greater_or_equal", QueryBuilderOperatorInterface::OPERATOR_GREATER_OR_EQUAL);
        $this->assertEquals("in", QueryBuilderOperatorInterface::OPERATOR_IN);
        $this->assertEquals("is_empty", QueryBuilderOperatorInterface::OPERATOR_IS_EMPTY);
        $this->assertEquals("is_not_empty", QueryBuilderOperatorInterface::OPERATOR_IS_NOT_EMPTY);
        $this->assertEquals("is_not_null", QueryBuilderOperatorInterface::OPERATOR_IS_NOT_NULL);
        $this->assertEquals("is_null", QueryBuilderOperatorInterface::OPERATOR_IS_NULL);
        $this->assertEquals("less", QueryBuilderOperatorInterface::OPERATOR_LESS);
        $this->assertEquals("less_or_equal", QueryBuilderOperatorInterface::OPERATOR_LESS_OR_EQUAL);
        $this->assertEquals("not_begins_with", QueryBuilderOperatorInterface::OPERATOR_NOT_BEGINS_WITH);
        $this->assertEquals("not_between", QueryBuilderOperatorInterface::OPERATOR_NOT_BETWEEN);
        $this->assertEquals("not_contains", QueryBuilderOperatorInterface::OPERATOR_NOT_CONTAINS);
        $this->assertEquals("not_ends_with", QueryBuilderOperatorInterface::OPERATOR_NOT_ENDS_WITH);
        $this->assertEquals("not_equal", QueryBuilderOperatorInterface::OPERATOR_NOT_EQUAL);
        $this->assertEquals("not_in", QueryBuilderOperatorInterface::OPERATOR_NOT_IN);
    }
}
