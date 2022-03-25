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

use JsonSerializable;
use WBW\Library\Accounting\Model\AccountingAccount;
use WBW\Library\Accounting\Model\AccountingAccountInterface;
use WBW\Library\Accounting\Model\VatRate;
use WBW\Library\Accounting\Model\VatRateInterface;
use WBW\Library\Accounting\Tests\AbstractTestCase;
use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;

/**
 * VAT rate test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Model
 */
class VatRateTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/VatRateTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new VatRate();
        $obj->setLabel(BaseSerializerKeys::LABEL);
        $obj->setRate(0.123456789);

        $obj->setPurchasesAccountingAccount(new AccountingAccount());
        $obj->getPurchasesAccountingAccount()->setLabel("purchaseLabel");
        $obj->getPurchasesAccountingAccount()->setNumber("purchaseNumber");
        $obj->getPurchasesAccountingAccount()->setType("purchaseType");

        $obj->setSalesAccountingAccount(new AccountingAccount());
        $obj->getSalesAccountingAccount()->setLabel("salesLabel");
        $obj->getSalesAccountingAccount()->setNumber("salesNumber");
        $obj->getSalesAccountingAccount()->setType("salesType");

        $res = $obj->jsonSerialize();
        $this->assertCount(4, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests setPurchasesAccountingAccount()
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
     * Tests setSalesAccountingAccount()
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
     * Tests __construct()
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
