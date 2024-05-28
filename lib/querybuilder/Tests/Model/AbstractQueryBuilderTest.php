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
use WBW\Library\QueryBuilder\Model\QueryBuilderInputInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;
use WBW\Library\QueryBuilder\Tests\Fixtures\Model\TestAbstractQueryBuilder;

/**
 * Abstract QueryBuilder test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Model
 */
class AbstractQueryBuilderTest extends AbstractTestCase {

    /**
     * Test setField()
     *
     * @return void
     */
    public function testSetField(): void {

        $obj = new TestAbstractQueryBuilder();

        $obj->setField("field");
        $this->assertEquals("field", $obj->getField());
    }

    /**
     * Test setId()
     *
     * @return void
     */
    public function testSetId(): void {

        $obj = new TestAbstractQueryBuilder();

        $obj->setId("id");
        $this->assertEquals("id", $obj->getId());
    }

    /**
     * Test setInput()
     *
     * @return void
     */
    public function testSetInput(): void {

        $obj = new TestAbstractQueryBuilder();

        $obj->setInput(QueryBuilderInputInterface::INPUT_CHECKBOX);
        $this->assertEquals(QueryBuilderInputInterface::INPUT_CHECKBOX, $obj->getInput());
    }

    /**
     * Test setInput()
     *
     * @return void
     */
    public function testSetInputWithInvalidArgumentException(): void {

        $obj = new TestAbstractQueryBuilder();

        try {

            $obj->setInput("input");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The input "input" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new TestAbstractQueryBuilder();

        $obj->setType(QueryBuilderTypeInterface::TYPE_BOOLEAN);
        $this->assertEquals(QueryBuilderTypeInterface::TYPE_BOOLEAN, $obj->getType());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetTypeWithInvalidArgumentException(): void {

        $obj = new TestAbstractQueryBuilder();

        try {

            $obj->setType("type");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The type "type" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test __construct()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function test__construct(): void {

        $obj = new TestAbstractQueryBuilder();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getField());
        $this->assertNull($obj->getInput());
        $this->assertNull($obj->getType());
    }
}
