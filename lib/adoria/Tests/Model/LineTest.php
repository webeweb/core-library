<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Adoria\Tests\Model;

use DateTime;
use Throwable;
use WBW\Library\Adoria\Model\Line;
use WBW\Library\Adoria\Tests\AbstractTestCase;

/**
 * Line test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Adoria\Tests\Model
 */
class LineTest extends AbstractTestCase {

    /**
     * Test setAmount()
     *
     * @return void
     */
    public function testSetAmount(): void {

        $obj = new Line();

        $obj->setAmount("Amount");
        $this->assertEquals("Amount", $obj->getAmount());
    }

    /**
     * Test setAmountSign()
     *
     * @return void
     */
    public function testSetAmountSign(): void {

        $obj = new Line();

        $obj->setAmountSign("AmountSign");
        $this->assertEquals("AmountSign", $obj->getAmountSign());
    }

    /**
     * Test setAnalyticCode()
     *
     * @return void
     */
    public function testSetAnalyticCode(): void {

        $obj = new Line();

        $obj->setAnalyticCode("AnalyticCode");
        $this->assertEquals("AnalyticCode", $obj->getAnalyticCode());
    }

    /**
     * Test setBookingJournalCode()
     *
     * @return void
     */
    public function testSetBookingJournalCode(): void {

        $obj = new Line();

        $obj->setBookingJournalCode("BookingJournalCode");
        $this->assertEquals("BookingJournalCode", $obj->getBookingJournalCode());
    }

    /**
     * Test setCurrency()
     *
     * @return void
     */
    public function testSetCurrency(): void {

        $obj = new Line();

        $obj->setCurrency("Currency");
        $this->assertEquals("Currency", $obj->getCurrency());
    }

    /**
     * Test setFreeField()
     *
     * @return void
     */
    public function testSetFreeField(): void {

        $obj = new Line();

        $obj->setFreeField("FreeField");
        $this->assertEquals("FreeField", $obj->getFreeField());
    }

    /**
     * Test setInvoiceDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetInvoiceDate(): void {

        // Set an Invoice date mock.
        $invoiceDate = new DateTime();

        $obj = new Line();

        $obj->setInvoiceDate($invoiceDate);
        $this->assertSame($invoiceDate, $obj->getInvoiceDate());
    }

    /**
     * Test setInvoiceDueDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetInvoiceDueDate(): void {

        // Set an Invoice due date mock.
        $invoiceDueDate = new DateTime();

        $obj = new Line();

        $obj->setInvoiceDueDate($invoiceDueDate);
        $this->assertSame($invoiceDueDate, $obj->getInvoiceDueDate());
    }

    /**
     * Test setInvoiceNumber()
     *
     * @return void
     */
    public function testSetInvoiceNumber(): void {

        $obj = new Line();

        $obj->setInvoiceNumber("InvoiceNumber");
        $this->assertEquals("InvoiceNumber", $obj->getInvoiceNumber());
    }

    /**
     * Test setSubledgerAccount()
     *
     * @return void
     */
    public function testSetSubledgerAccount(): void {

        $obj = new Line();

        $obj->setSubledgerAccount("SubledgerAccount");
        $this->assertEquals("SubledgerAccount", $obj->getSubledgerAccount());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Line();

        $this->assertNull($obj->getAccountingCode());
        $this->assertNull($obj->getAmount());
        $this->assertNull($obj->getAmountSign());
        $this->assertNull($obj->getAnalyticCode());
        $this->assertNull($obj->getBookingJournalCode());
        $this->assertNull($obj->getCurrency());
        $this->assertNull($obj->getFreeField());
        $this->assertNull($obj->getInvoiceDate());
        $this->assertNull($obj->getInvoiceDueDate());
        $this->assertNull($obj->getInvoiceNumber());
        $this->assertNull($obj->getReference());
        $this->assertNull($obj->getSubledgerAccount());
    }
}
