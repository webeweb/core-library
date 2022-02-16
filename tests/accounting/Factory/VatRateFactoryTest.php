<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Tests\Factory;

use WBW\Library\Accounting\Factory\VatRateFactory;
use WBW\Library\Accounting\Model\AccountingAccountInterface;
use WBW\Library\Accounting\Model\VatRate;
use WBW\Library\Accounting\Tests\AbstractTestCase;

/**
 * VAT rate factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Factory
 */
class VatRateFactoryTest extends AbstractTestCase {

    /**
     * Tests copy()
     *
     * @return void
     */
    public function testCopy(): void {

        // Set the Accounting account mocks.
        $purchasesAccountingAccount = $this->getMockBuilder(AccountingAccountInterface::class)->getMock();
        $salesAccountingAccount     = $this->getMockBuilder(AccountingAccountInterface::class)->getMock();

        $obj = new VatRate();
        $obj->setLabel("label");
        $obj->setPurchasesAccountingAccount($purchasesAccountingAccount);
        $obj->setRate(0.123456789);
        $obj->setSalesAccountingAccount($salesAccountingAccount);

        $res = VatRateFactory::copy($obj, new VatRate());
        $this->assertEquals($obj->getLabel(), $res->getLabel());
        $this->assertSame($obj->getPurchasesAccountingAccount(), $res->getPurchasesAccountingAccount());
        $this->assertEquals($obj->getRate(), $res->getRate());
        $this->assertSame($obj->getSalesAccountingAccount(), $res->getSalesAccountingAccount());
    }
}
