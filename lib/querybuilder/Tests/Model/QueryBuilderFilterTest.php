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

use InvalidArgumentException;
use JsonSerializable;
use Throwable;
use WBW\Library\QueryBuilder\Model\QueryBuilderDecoratorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderFilter;
use WBW\Library\QueryBuilder\Model\QueryBuilderFilterInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderOperatorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderValidationInterface;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * QueryBuilder filter test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Model
 */
class QueryBuilderFilterTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new QueryBuilderFilter("id", QueryBuilderTypeInterface::TYPE_STRING, [QueryBuilderOperatorInterface::OPERATOR_EQUAL]);

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setDecorator()
     *
     * @return void
     */
    public function testSetDecorator(): void {

        // Set a QueryBuilder decorator mock.
        $decorator = $this->getMockBuilder(QueryBuilderDecoratorInterface::class)->getMock();

        $obj = new QueryBuilderFilter("id", QueryBuilderTypeInterface::TYPE_BOOLEAN, []);

        $obj->setDecorator($decorator);
        $this->assertSame($decorator, $obj->getDecorator());
    }

    /**
     * Test setLabel()
     *
     * @return void
     */
    public function testSetLabel(): void {

        $obj = new QueryBuilderFilter("id", QueryBuilderTypeInterface::TYPE_BOOLEAN, []);

        $obj->setLabel("label");
        $this->assertEquals("label", $obj->getLabel());
    }

    /**
     * Test setMultiple()
     *
     * @return void
     */
    public function testSetMultiple(): void {

        $obj = new QueryBuilderFilter("id", QueryBuilderTypeInterface::TYPE_BOOLEAN, []);

        $obj->setMultiple(true);
        $this->assertTrue($obj->getMultiple());
    }

    /**
     * Test setOperators()
     *
     * @return void
     */
    public function testSetOperators(): void {

        $obj = new QueryBuilderFilter("id", QueryBuilderTypeInterface::TYPE_BOOLEAN, []);

        $obj->setOperators([QueryBuilderOperatorInterface::OPERATOR_EQUAL]);
        $this->assertEquals([QueryBuilderOperatorInterface::OPERATOR_EQUAL], $obj->getOperators());
    }

    /**
     * Test setOperators()
     *
     * @return void
     */
    public function testSetOperatorsWithInvalidArgumentException(): void {

        $obj = new QueryBuilderFilter("id", QueryBuilderTypeInterface::TYPE_BOOLEAN, []);

        try {

            $obj->setOperators(["exception"]);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The operator "exception" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test setValidation()
     *
     * @return void
     */
    public function testSetValidation(): void {

        // Set a QueryBuilder validation mock.
        $validation = $this->getMockBuilder(QueryBuilderValidationInterface::class)->getMock();

        $obj = new QueryBuilderFilter("id", QueryBuilderTypeInterface::TYPE_BOOLEAN, []);

        $obj->setValidation($validation);
        $this->assertSame($validation, $obj->getValidation());
    }

    /**
     * Test setValues()
     *
     * @return void
     */
    public function testSetValues(): void {

        $obj = new QueryBuilderFilter("id", QueryBuilderTypeInterface::TYPE_BOOLEAN, []);

        $obj->setValues(["values"]);
        $this->assertEquals(["values"], $obj->getValues());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new QueryBuilderFilter("id", QueryBuilderTypeInterface::TYPE_BOOLEAN, []);

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(QueryBuilderFilterInterface::class, $obj);

        $this->assertEquals("id", $obj->getId());
        $this->assertNull($obj->getField());
        $this->assertNull($obj->getInput());
        $this->assertEquals(QueryBuilderTypeInterface::TYPE_BOOLEAN, $obj->getType());

        $this->assertNull($obj->getDecorator());
        $this->assertEquals("", $obj->getLabel());
        $this->assertFalse($obj->getMultiple());
        $this->assertEquals([], $obj->getOperators());
        $this->assertNull($obj->getValidation());
        $this->assertNull($obj->getValues());
    }
}
