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
use WBW\Library\QueryBuilder\Model\QueryBuilderInputInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;
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
}
