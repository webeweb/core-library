<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Adoria\Model;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Adoria\Model\Line;

/**
 * Line test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Adoria\Model
 */
class LineTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setAmount() method.
     *
     * @return void
     */
    public function testSetAmount() {

        $obj = new Line();

        $obj->setAmount("Amount");
        $this->assertEquals("Amount", $obj->getAmount());
    }

    /**
     * Tests the setAmountSign() method.
     *
     * @return void
     */
    public function testSetAmountSign() {

        $obj = new Line();

        $obj->setAmountSign("AmountSign");
        $this->assertEquals("AmountSign", $obj->getAmountSign());
    }

    /**
     * Tests the setAnalyticCode() method.
     *
     * @return void
     */
    public function testSetAnalyticCode() {

        $obj = new Line();

        $obj->setAnalyticCode("AnalyticCode");
        $this->assertEquals("AnalyticCode", $obj->getAnalyticCode());
    }

    /**
     * Tests the setBookingJournalCode() method.
     *
     * @return void
     */
    public function testSetBookingJournalCode() {

        $obj = new Line();

        $obj->setBookingJournalCode("BookingJournalCode");
        $this->assertEquals("BookingJournalCode", $obj->getBookingJournalCode());
    }

    /**
     * Tests the setCurrency() method.
     *
     * @return void
     */
    public function testSetCurrency() {

        $obj = new Line();

        $obj->setCurrency("Currency");
        $this->assertEquals("Currency", $obj->getCurrency());
    }

    /**
     * Tests the setFreeField() method.
     *
     * @return void
     */
    public function testSetFreeField() {

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
    public function testSetInvoiceDate() {

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
    public function testSetInvoiceDueDate() {

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
    public function testSetInvoiceNumber() {

        $obj = new Line();

        $obj->setInvoiceNumber("InvoiceNumber");
        $this->assertEquals("InvoiceNumber", $obj->getInvoiceNumber());
    }

    /**
     * Tests the setSubledgerAccount() method.
     *
     * @return void
     */
    public function testSetSubledgerAccount() {

        $obj = new Line();

        $obj->setSubledgerAccount("SubledgerAccount");
        $this->assertEquals("SubledgerAccount", $obj->getSubledgerAccount());
    }
}
