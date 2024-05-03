<?php

declare(strict_types=1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\AccountingGeneral;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Accounting general test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class AccountingGeneralTest extends AbstractTestCase {

    /**
     * Test setAccountingCreditInvoice()
     *
     * @return void
     */
    public function testSetAccountingCreditInvoice(): void {

        $obj = new AccountingGeneral();

        $obj->setAccountingCreditInvoice("accountingCreditInvoice");
        $this->assertEquals("accountingCreditInvoice", $obj->getAccountingCreditInvoice());
    }

    /**
     * Test setAccountingGeneralSupplier()
     *
     * @return void
     */
    public function testSetAccountingGeneralSupplier(): void {

        $obj = new AccountingGeneral();

        $obj->setAccountingGeneralSupplier("accountingGeneralSupplier");
        $this->assertEquals("accountingGeneralSupplier", $obj->getAccountingGeneralSupplier());
    }

    /**
     * Test setAccountingPurchaseInvoice()
     *
     * @return void
     */
    public function testSetAccountingPurchaseInvoice(): void {

        $obj = new AccountingGeneral();

        $obj->setAccountingPurchaseInvoice("accountingPurchaseInvoice");
        $this->assertEquals("accountingPurchaseInvoice", $obj->getAccountingPurchaseInvoice());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AccountingGeneral();

        $this->assertNull($obj->getAccountingCreditInvoice());
        $this->assertNull($obj->getAccountingGeneralSupplier());
        $this->assertNull($obj->getAccountingPurchaseInvoice());
    }
}
