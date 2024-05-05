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
use WBW\Library\QueryBuilder\Model\QueryBuilderDecoratorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderOperatorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderRule;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * QueryBuilder rule test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Model
 */
class QueryBuilderRuleTest extends AbstractTestCase {

    /**
     * Test setDecorator()
     *
     * @return void
     */
    public function testSetDecorator(): void {

        // Set a QueryBuilder decorator mock.
        $qbDecorator = $this->getMockBuilder(QueryBuilderDecoratorInterface::class)->getMock();

        $obj = new QueryBuilderRule();

        $obj->setDecorator($qbDecorator);
        $this->assertSame($qbDecorator, $obj->getDecorator());
    }

    /**
     * Test setOperator()
     *
     * @return void
     */
    public function testSetOperator(): void {

        $obj = new QueryBuilderRule();

        $obj->setOperator(QueryBuilderOperatorInterface::OPERATOR_BEGINS_WITH);
        $this->assertEquals(QueryBuilderOperatorInterface::OPERATOR_BEGINS_WITH, $obj->getOperator());
    }

    /**
     * Test setOperator()
     *
     * @return void
     */
    public function testSetOperatorWithInvalidArgumentException(): void {

        $obj = new QueryBuilderRule();

        try {

            $obj->setOperator("operator");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The operator "operator" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test setValue()
     *
     * @return void
     */
    public function testSetValue(): void {

        $obj = new QueryBuilderRule();

        $obj->setValue("value");
        $this->assertEquals("value", $obj->getValue());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new QueryBuilderRule();

        $this->assertInstanceOf(QueryBuilderRuleInterface::class, $obj);

        $this->assertNull($obj->getDecorator());
        $this->assertNull($obj->getField());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getInput());
        $this->assertNull($obj->getOperator());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getValue());
    }
}
