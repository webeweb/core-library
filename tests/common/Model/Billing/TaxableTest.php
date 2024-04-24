<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Model\Billing;

use JsonSerializable;
use WBW\Library\Common\Model\Billing\TaxableInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\Billing\TestTaxable;

/**
 * Taxable test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\Billing
 */
class TaxableTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new TestTaxable();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test onSubmit()
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
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestTaxable();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(TaxableInterface::class, $obj);

        $this->assertNull($obj->getDiscountAmount());
        $this->assertNull($obj->getDiscountRate());
        $this->assertNull($obj->getExcludingVatPrice());
        $this->assertNull($obj->getIncludingVatPrice());
        $this->assertNull($obj->getVatAmount());
        $this->assertNull($obj->getVatRate());
    }
}
