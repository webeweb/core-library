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

namespace WBW\Library\QueryBuilder\Tests\Factory;

use WBW\Library\QueryBuilder\Factory\QueryBuilderFactory;
use WBW\Library\QueryBuilder\Model\QueryBuilderConditionInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderInputInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderOperatorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * QueryBuilder factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @packageWBW\Library\QueryBuilder\Tests\Factory
 */
class QueryBuilderFactoryTest extends AbstractTestCase {

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

        $this->assertEquals($exp, QueryBuilderFactory::enumConditions());
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

        $this->assertEquals($exp, QueryBuilderFactory::enumInputs());
    }

    /**
     * Test enumOperators()
     *
     * @return void
     */
    public function testEnumOperators(): void {

        $exp = [
            QueryBuilderOperatorInterface::OPERATOR_BEGINS_WITH      => "LIKE",
            QueryBuilderOperatorInterface::OPERATOR_BETWEEN          => "BETWEEN",
            QueryBuilderOperatorInterface::OPERATOR_CONTAINS         => "LIKE",
            QueryBuilderOperatorInterface::OPERATOR_ENDS_WITH        => "LIKE",
            QueryBuilderOperatorInterface::OPERATOR_EQUAL            => "=",
            QueryBuilderOperatorInterface::OPERATOR_GREATER          => ">",
            QueryBuilderOperatorInterface::OPERATOR_GREATER_OR_EQUAL => ">=",
            QueryBuilderOperatorInterface::OPERATOR_IN               => "IN",
            QueryBuilderOperatorInterface::OPERATOR_IS_EMPTY         => "IS NULL",
            QueryBuilderOperatorInterface::OPERATOR_IS_NOT_EMPTY     => "IS NOT NULL",
            QueryBuilderOperatorInterface::OPERATOR_IS_NOT_NULL      => "IS NOT NULL",
            QueryBuilderOperatorInterface::OPERATOR_IS_NULL          => "IS NULL",
            QueryBuilderOperatorInterface::OPERATOR_LESS             => "<",
            QueryBuilderOperatorInterface::OPERATOR_LESS_OR_EQUAL    => "<=",
            QueryBuilderOperatorInterface::OPERATOR_NOT_BEGINS_WITH  => "NOT LIKE",
            QueryBuilderOperatorInterface::OPERATOR_NOT_BETWEEN      => "NOT BETWEEN",
            QueryBuilderOperatorInterface::OPERATOR_NOT_CONTAINS     => "NOT LIKE",
            QueryBuilderOperatorInterface::OPERATOR_NOT_ENDS_WITH    => "NOT LIKE",
            QueryBuilderOperatorInterface::OPERATOR_NOT_EQUAL        => "<>",
            QueryBuilderOperatorInterface::OPERATOR_NOT_IN           => "NOT IN",
        ];

        $this->assertEquals($exp, QueryBuilderFactory::enumOperators());
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

        $this->assertEquals($exp, QueryBuilderFactory::enumTypes());
    }
}
