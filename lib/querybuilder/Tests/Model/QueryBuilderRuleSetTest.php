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

namespace WBW\Library\QueryBuilder\Tests\Model;

use InvalidArgumentException;
use Throwable;
use WBW\Library\QueryBuilder\Model\QueryBuilderConditionInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleSet;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleSetInterface;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * QueryBuilder rule set test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Model
 */
class QueryBuilderRuleSetTest extends AbstractTestCase {

    /**
     * Test setCondition()
     *
     * @return void
     */
    public function testSetCondition(): void {

        $obj = new QueryBuilderRuleSet();

        $obj->setCondition(QueryBuilderConditionInterface::CONDITION_AND);
        $this->assertEquals(QueryBuilderConditionInterface::CONDITION_AND, $obj->getCondition());
    }

    /**
     * Test setCondition()
     *
     * @return void
     */
    public function testSetConditionWithInvalidArgumentException(): void {

        $obj = new QueryBuilderRuleSet();

        try {

            $obj->setCondition("condition");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The condition "condition" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new QueryBuilderRuleSet();

        $this->assertInstanceOf(QueryBuilderRuleSetInterface::class, $obj);

        $this->assertNull($obj->getCondition());
        $this->assertEquals([], $obj->getRules());
        $this->assertFalse($obj->getValid());
    }
}
