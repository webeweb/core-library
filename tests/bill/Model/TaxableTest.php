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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestTaxable();

        $this->assertInstanceOf(TaxableInterface::class, $obj);

        $this->assertNull($obj->getDiscountAmount());
        $this->assertNull($obj->getDiscountRate());
        $this->assertNull($obj->getExcludingVatPrice());
        $this->assertNull($obj->getIncludingVatPrice());
        $this->assertNull($obj->getVatAmount());
        $this->assertNull($obj->getVatRate());
    }
}