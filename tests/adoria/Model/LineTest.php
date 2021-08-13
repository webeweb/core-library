<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Tests\Model;

use DateTime;
use Exception;
use WBW\Library\Adoria\Model\Line;
use WBW\Library\Adoria\Tests\AbstractTestCase;

/**
 * Line test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Adoria\Tests\Model
 */
class LineTest extends AbstractTestCase {

    /**
     * Tests the setAmount() method.
     *
     * @return void
     */
    public function testSetAmount(): void {

        $obj = new Line();

        $obj->setAmount("Amount");
        $this->assertEquals("Amount", $obj->getAmount());
    }

    /**
     * Tests the setAmountSign() method.
     *
     * @return void
     */
    public function testSetAmountSign(): void {

        $obj = new Line();

        $obj->setAmountSign("AmountSign");
        $this->assertEquals("AmountSign", $obj->getAmountSign());
    }

    /**
     * Tests the setAnalyticCode() method.
     *
     * @return void
     */
    public function testSetAnalyticCode(): void {

        $obj = new Line();

        $obj->setAnalyticCode("AnalyticCode");
        $this->assertEquals("AnalyticCode", $obj->getAnalyticCode());
    }

    /**
     * Tests the setBookingJournalCode() method.
     *
     * @return void
     */
    public function testSetBookingJournalCode(): void {

        $obj = new Line();

        $obj->setBookingJournalCode("BookingJournalCode");
        $this->assertEquals("BookingJournalCode", $obj->getBookingJournalCode());
    }

    /**
     * Tests the setCurrency() method.
     *
     * @return void
     */
    public function testSetCurrency(): void {

        $obj = new Line();

        $obj->setCurrency("Currency");
        $this->assertEquals("Currency", $obj->getCurrency());
    }

    /**
     * Tests the setFreeField() method.
     *
     * @return void
     */
    public function testSetFreeField(): void {

        $obj = new Line();

        $obj->setFreeField("FreeField");
        $this->assertEquals("FreeField", $obj->getFreeField());
    }

    /**
     * Tests the setInvoiceDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetInvoiceDate(): void {

        // Set an Invoice date mock.
        $invoiceDate = new DateTime();

        $obj = new Line();

        $obj->setInvoiceDate($invoiceDate);
        $this->assertSame($invoiceDate, $obj->getInvoiceDate());
    }

    /**
     * Tests the setInvoiceDueDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetInvoiceDueDate(): void {

        // Set a Invoice due date mock.
        $invoiceDueDate = new DateTime();

        $obj = new Line();

        $obj->setInvoiceDueDate($invoiceDueDate);
        $this->assertSame($invoiceDueDate, $obj->getInvoiceDueDate());
    }

    /**
     * Tests the setInvoiceNumber() method.
     *
     * @return void
     */
    public function testSetInvoiceNumber(): void {

        $obj = new Line();

        $obj->setInvoiceNumber("InvoiceNumber");
        $this->assertEquals("InvoiceNumber", $obj->getInvoiceNumber());
    }

    /**
     * Tests the setSubledgerAccount() method.
     *
     * @return void
     */
    public function testSetSubledgerAccount(): void {

        $obj = new Line();

        $obj->setSubledgerAccount("SubledgerAccount");
        $this->assertEquals("SubledgerAccount", $obj->getSubledgerAccount());
    }

    /**
     * Tests the __construct() method.
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
