<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Tests\Model;

use JsonSerializable;
use WBW\Library\Bill\Model\TaxableInterface;
use WBW\Library\Bill\Tests\AbstractTestCase;
use WBW\Library\Bill\Tests\Fixtures\Model\TestTaxable;

/**
 * Taxable test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Model
 */
class TaxableTest extends AbstractTestCase {

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/TaxableTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new TestTaxable();
        $obj->setDiscountAmount(0.1);
        $obj->setDiscountRate(0.2);
        $obj->setExcludingVatPrice(0.3);
        $obj->setIncludingVatPrice(0.4);
        $obj->setVatAmount(0.5);
        $obj->setVatRate(0.6);

        $res = $obj->jsonSerialize();
        $this->assertCount(6, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests the onSubmit() method.
     *
     * @return void
     */
    public function testOnSubmit(): void {

        $obj = new TestTaxable();

        $obj->onSubmit();
        $this->assertEquals(0.0, $obj->getDiscountAmount());
        $this->assertEquals(0.0, $obj->getIncludingVatPrice());
        $this->assertEquals(0.0, $obj->getVatAmount());

        $obj->setExcludingVatPrice(100);
        $obj->setDiscountRate(20);
        $obj->setVatRate(20);

        $obj->onSubmit();
        $this->assertEquals(20.0, $obj->getDiscountAmount());
        $this->assertEquals(96.0, $obj->getIncludingVatPrice());
        $this->assertEquals(16.0, $obj->getVatAmount());
    }

    /**
     * Tests the __clone() method.
     *
     * @return void
     */
    public function test__clone(): void {

        $obj = new TestTaxable();
        $obj->setDiscountAmount(0.01);
        $obj->setDiscountRate(0.02);
        $obj->setExcludingVatPrice(0.03);
        $obj->setIncludingVatPrice(0.04);
        $obj->setVatAmount(0.05);
        $obj->setVatRate(0.06);

        $res = clone $obj;
        $this->assertEquals($obj->getDiscountAmount(), $res->getDiscountAmount());
        $this->assertEquals($obj->getDiscountRate(), $res->getDiscountRate());
        $this->assertEquals($obj->getExcludingVatPrice(), $res->getExcludingVatPrice());
        $this->assertEquals($obj->getIncludingVatPrice(), $res->getIncludingVatPrice());
        $this->assertEquals($obj->getVatAmount(), $res->getVatAmount());
        $this->assertEquals($obj->getVatRate(), $res->getVatRate());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestTaxable();

        $this->assertInstanceOf(TaxableInterface::class, $obj);
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getDiscountAmount());
        $this->assertNull($obj->getDiscountRate());
        $this->assertNull($obj->getExcludingVatPrice());
        $this->assertNull($obj->getIncludingVatPrice());
        $this->assertNull($obj->getVatAmount());
        $this->assertNull($obj->getVatRate());
    }
}