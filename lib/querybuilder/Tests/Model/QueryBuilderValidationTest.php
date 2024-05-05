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

use JsonSerializable;
use WBW\Library\QueryBuilder\Model\QueryBuilderValidation;
use WBW\Library\QueryBuilder\Model\QueryBuilderValidationInterface;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * QueryBuilder validation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Model
 */
class QueryBuilderValidationTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new QueryBuilderValidation();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setAllowEmptyValue()
     *
     * @return void
     */
    public function testSetAllowEmptyValue(): void {

        $obj = new QueryBuilderValidation();

        $obj->setAllowEmptyValue(true);
        $this->assertTrue($obj->getAllowEmptyValue());
    }

    /**
     * Test setCallback()
     *
     * @return void
     */
    public function testSetCallback(): void {

        $obj = new QueryBuilderValidation();

        $obj->setCallback("callback");
        $this->assertEquals("callback", $obj->getCallback());
    }

    /**
     * Test setFormat()
     *
     * @return void
     */
    public function testSetFormat(): void {

        $obj = new QueryBuilderValidation();

        $obj->setFormat("format");
        $this->assertEquals("format", $obj->getFormat());
    }

    /**
     * Test setMax()
     *
     * @return void
     */
    public function testSetMax(): void {

        $obj = new QueryBuilderValidation();

        $obj->setMax(1);
        $this->assertEquals(1, $obj->getMax());
    }

    /**
     * Test setMessages()
     *
     * @return void
     */
    public function testSetMessages(): void {

        $obj = new QueryBuilderValidation();

        $obj->setMessages([]);
        $this->assertEquals([], $obj->getMessages());
    }

    /**
     * Test setMin()
     *
     * @return void
     */
    public function testSetMin(): void {

        $obj = new QueryBuilderValidation();

        $obj->setMin(0);
        $this->assertEquals(0, $obj->getMin());
    }

    /**
     * Test setStep()
     *
     * @return void
     */
    public function testSetStep(): void {

        $obj = new QueryBuilderValidation();

        $obj->setStep(1);
        $this->assertEquals(1, $obj->getStep());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new QueryBuilderValidation();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(QueryBuilderValidationInterface::class, $obj);

        $this->assertNull($obj->getAllowEmptyValue());
        $this->assertNull($obj->getCallback());
        $this->assertNull($obj->getFormat());
        $this->assertNull($obj->getMax());
        $this->assertNull($obj->getMessages());
        $this->assertNull($obj->getMin());
        $this->assertNull($obj->getStep());
    }
}
