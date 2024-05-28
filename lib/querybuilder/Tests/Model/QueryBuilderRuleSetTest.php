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

namespace WBW\Library\QueryBuilder\Tests\Model;

use InvalidArgumentException;
use Throwable;
use WBW\Library\QueryBuilder\Model\QueryBuilderConditionInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleInterface;
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
     * Test addRule()
     *
     * @return void
     */
    public function testAddRule(): void {

        // Set a QueryBuilder rule mock.
        $rule = $this->getMockBuilder(QueryBuilderRuleInterface::class)->getMock();

        $obj = new QueryBuilderRuleSet();

        $obj->addRule($rule);
        $this->assertCount(1, $obj->getRules());
        $this->assertSame($rule, $obj->getRules()[0]);
    }

    /**
     * Test addRuleSet()
     *
     * @return void
     */
    public function testAddRuleSet(): void {

        // Set a QueryBuilder rule set mock.
        $rule = $this->getMockBuilder(QueryBuilderRuleSetInterface::class)->getMock();

        $obj = new QueryBuilderRuleSet();

        $obj->addRuleSet($rule);
        $this->assertCount(1, $obj->getRules());
        $this->assertSame($rule, $obj->getRules()[0]);
    }

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
