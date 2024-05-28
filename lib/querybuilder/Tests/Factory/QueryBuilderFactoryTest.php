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

namespace WBW\Library\QueryBuilder\Tests\Factory;

use InvalidArgumentException;
use Throwable;
use WBW\Library\QueryBuilder\Factory\QueryBuilderFactory;
use WBW\Library\QueryBuilder\Helper\QueryBuilderHelper;
use WBW\Library\QueryBuilder\Model\QueryBuilderDecoratorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderOperatorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;
use WBW\Library\QueryBuilder\Tests\Fixtures\Factory\TestQueryBuilderFactory;

/**
 * QueryBuilder factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @packageWBW\Library\QueryBuilder\Tests\Factory
 */
class QueryBuilderFactoryTest extends AbstractTestCase {

    /**
     * Test enumQueryBuilderOperators()
     *
     * @return void
     */
    public function testEnumQueryBuilderOperators(): void {

        $res = [
            QueryBuilderOperatorInterface::OPERATOR_BEGINS_WITH      => "WBW\\Library\\QueryBuilder\\Model\\Operator\\BeginsWithQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_BETWEEN          => "WBW\\Library\\QueryBuilder\\Model\\Operator\\BetweenQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_CONTAINS         => "WBW\\Library\\QueryBuilder\\Model\\Operator\\ContainsQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_ENDS_WITH        => "WBW\\Library\\QueryBuilder\\Model\\Operator\\EndsWithQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_EQUAL            => "WBW\\Library\\QueryBuilder\\Model\\Operator\\EqualQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_GREATER          => "WBW\\Library\\QueryBuilder\\Model\\Operator\\GreaterQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_GREATER_OR_EQUAL => "WBW\\Library\\QueryBuilder\\Model\\Operator\\GreaterOrEqualQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_IN               => "WBW\\Library\\QueryBuilder\\Model\\Operator\\InQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_IS_EMPTY         => "WBW\\Library\\QueryBuilder\\Model\\Operator\\IsEmptyQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_IS_NOT_EMPTY     => "WBW\\Library\\QueryBuilder\\Model\\Operator\\IsNotEmptyQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_IS_NOT_NULL      => "WBW\\Library\\QueryBuilder\\Model\\Operator\\IsNotNullQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_IS_NULL          => "WBW\\Library\\QueryBuilder\\Model\\Operator\\IsNullQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_LESS             => "WBW\\Library\\QueryBuilder\\Model\\Operator\\LessQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_LESS_OR_EQUAL    => "WBW\\Library\\QueryBuilder\\Model\\Operator\\LessOrEqualQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_NOT_BEGINS_WITH  => "WBW\\Library\\QueryBuilder\\Model\\Operator\\NotBeginsWithQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_NOT_BETWEEN      => "WBW\\Library\\QueryBuilder\\Model\\Operator\\NotBetweenQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_NOT_CONTAINS     => "WBW\\Library\\QueryBuilder\\Model\\Operator\\NotContainsQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_NOT_ENDS_WITH    => "WBW\\Library\\QueryBuilder\\Model\\Operator\\NotEndsWithQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_NOT_EQUAL        => "WBW\\Library\\QueryBuilder\\Model\\Operator\\NotEqualQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_NOT_IN           => "WBW\\Library\\QueryBuilder\\Model\\Operator\\NotInQueryBuilderOperator",
        ];

        $this->assertEquals($res, TestQueryBuilderFactory::enumQueryBuilderOperators());
    }

    /**
     * Test enumQueryBuilderTypes()
     *
     * @return void
     */
    public function testEnumQueryBuilderTypes(): void {

        $res = [
            QueryBuilderTypeInterface::TYPE_BOOLEAN  => "WBW\\Library\\QueryBuilder\\Model\\Type\\BooleanQueryBuilderType",
            QueryBuilderTypeInterface::TYPE_DATE     => "WBW\\Library\\QueryBuilder\\Model\\Type\\DateQueryBuilderType",
            QueryBuilderTypeInterface::TYPE_DATETIME => "WBW\\Library\\QueryBuilder\\Model\\Type\\DateTimeQueryBuilderType",
            QueryBuilderTypeInterface::TYPE_DOUBLE   => "WBW\\Library\\QueryBuilder\\Model\\Type\\DoubleQueryBuilderType",
            QueryBuilderTypeInterface::TYPE_INTEGER  => "WBW\\Library\\QueryBuilder\\Model\\Type\\IntegerQueryBuilderType",
            QueryBuilderTypeInterface::TYPE_STRING   => "WBW\\Library\\QueryBuilder\\Model\\Type\\StringQueryBuilderType",
            QueryBuilderTypeInterface::TYPE_TIME     => "WBW\\Library\\QueryBuilder\\Model\\Type\\TimeQueryBuilderType",
        ];

        $this->assertEquals($res, TestQueryBuilderFactory::enumQueryBuilderTypes());
    }

    /**
     * Test newQueryBuilderOperator()
     *
     * @return void
     */
    public function testNewQueryBuilderOperator(): void {

        $classes = TestQueryBuilderFactory::enumQueryBuilderOperators();
        $values  = QueryBuilderHelper::enumOperators();

        foreach (array_keys($values) as $current) {

            $res = QueryBuilderFactory::newQueryBuilderOperator($current);
            $this->assertInstanceOf(QueryBuilderDecoratorInterface::class, $res);
            $this->assertInstanceOf($classes[$current], $res);
        }
    }

    /**
     * Test newQueryBuilderOperator()
     *
     * @return void
     */
    public function testNewQueryBuilderOperatorWithInvalidArgumentException(): void {

        try {

            QueryBuilderFactory::newQueryBuilderOperator("operator");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The decorator "operator" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test newQueryBuilderType()
     *
     * @return void
     */
    public function testNewQueryBuilderType(): void {

        $classes = TestQueryBuilderFactory::enumQueryBuilderTypes();
        $values  = QueryBuilderHelper::enumTypes();

        foreach ($values as $current) {

            $res = QueryBuilderFactory::newQueryBuilderType($current);
            $this->assertInstanceOf(QueryBuilderDecoratorInterface::class, $res);
            $this->assertInstanceOf($classes[$current], $res);
        }
    }

    /**
     * Test newQueryBuilderType()
     *
     * @return void
     */
    public function testNewQueryBuilderTypeWithInvalidArgumentException(): void {

        try {

            QueryBuilderFactory::newQueryBuilderType("type");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The decorator "type" is invalid', $ex->getMessage());
        }
    }
}
