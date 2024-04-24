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

namespace WBW\Library\Common\Tests\Billing;

use JsonSerializable;
use WBW\Library\Common\Billing\AccountingAccountInterface;
use WBW\Library\Common\Billing\VatRate;
use WBW\Library\Common\Billing\VatRateInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * VAT rate test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Billing
 */
class VatRateTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new VatRate();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setPurchasesAccountingAccount()
     *
     * @return void
     */
    public function testSetPurchasesAccountingAccount(): void {

        // Set a Purchases accounting account mock.
        $purchasesAccountingAccount = $this->getMockBuilder(AccountingAccountInterface::class)->getMock();

        $obj = new VatRate();

        $obj->setPurchasesAccountingAccount($purchasesAccountingAccount);
        $this->assertSame($purchasesAccountingAccount, $obj->getPurchasesAccountingAccount());
    }

    /**
     * Test setSalesAccountingAccount()
     *
     * @return void
     */
    public function testSetSalesAccountingAccount(): void {

        // Set a Sales accounting account mock.
        $salesAccountingAccount = $this->getMockBuilder(AccountingAccountInterface::class)->getMock();

        $obj = new VatRate();

        $obj->setSalesAccountingAccount($salesAccountingAccount);
        $this->assertSame($salesAccountingAccount, $obj->getSalesAccountingAccount());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new VatRate();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(VatRateInterface::class, $obj);

        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getRate());

        $this->assertNull($obj->getPurchasesAccountingAccount());
        $this->assertNull($obj->getSalesAccountingAccount());
    }
}
