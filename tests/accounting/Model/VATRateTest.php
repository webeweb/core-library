<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Tests\Model;

use WBW\Library\Accounting\Model\AccountingAccountInterface;
use WBW\Library\Accounting\Model\VATRate;
use WBW\Library\Accounting\Model\VATRateInterface;
use WBW\Library\Accounting\Tests\AbstractTestCase;

/**
 * VAT rate test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Model
 */
class VATRateTest extends AbstractTestCase {

    /**
     * Tests the setPurchasesAccountingAccount() method.
     *
     * @return void
     */
    public function testSetPurchasesAccountingAccount(): void {

        // Set a Purchases accounting account mock.
        $purchasesAccountingAccount = $this->getMockBuilder(AccountingAccountInterface::class)->getMock();

        $obj = new VATRate();

        $obj->setPurchasesAccountingAccount($purchasesAccountingAccount);
        $this->assertSame($purchasesAccountingAccount, $obj->getPurchasesAccountingAccount());
    }

    /**
     * Tests the setSalesAccountingAccount() method.
     *
     * @return void
     */
    public function testSetSalesAccountingAccount(): void {

        // Set a Sales accounting account mock.
        $salesAccountingAccount = $this->getMockBuilder(AccountingAccountInterface::class)->getMock();

        $obj = new VATRate();

        $obj->setSalesAccountingAccount($salesAccountingAccount);
        $this->assertSame($salesAccountingAccount, $obj->getSalesAccountingAccount());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new VATRate();

        $this->assertInstanceOf(VATRateInterface::class, $obj);

        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getRate());

        $this->assertNull($obj->getPurchasesAccountingAccount());
        $this->assertNull($obj->getSalesAccountingAccount());
    }
}
