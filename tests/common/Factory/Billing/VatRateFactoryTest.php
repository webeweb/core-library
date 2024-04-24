<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Factory\Billing;

use WBW\Library\Common\Factory\Billing\VatRateFactory;
use WBW\Library\Common\Model\Billing\AccountingAccountInterface;
use WBW\Library\Common\Model\Billing\VatRate;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * VAT rate factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Factory\Billing
 */
class VatRateFactoryTest extends AbstractTestCase {

    /**
     * Test copy()
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
