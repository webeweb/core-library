<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Tests\Serializer;

use WBW\Library\Adoria\Model\Line;
use WBW\Library\Adoria\Model\Result;
use WBW\Library\Adoria\Serializer\RequestSerializer;
use WBW\Library\Adoria\Serializer\ResponseDeserializer;
use WBW\Library\Adoria\Tests\AbstractTestCase;

/**
 * Response deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Adoria\Tests\Serializer
 */
class ResponseDeserializerTest extends AbstractTestCase {

    /**
     * Raw response "line".
     *
     * @var string
     */
    const RAW_RESPONSE_LINE = <<< JSON
{
    "BookingJournalCode": "bookingJournalCode",
    "InvoiceDate": "2019-01-16",
    "AccountingCode": "401",
    "SubledgerAccount": "subledgerAccount",
    "InvoiceNumber": "invoiceNumber",
    "Reference": "reference",
    "AnalyticCode": "analyticCode",
    "Amount": "amount",
    "Currency": "currency",
    "AmountSign": "D",
    "InvoiceDueDate": "2019-01-31",
    "FreeField": "freeField"
}
JSON;

    /**
     * Raw response "result".
     *
     * @var string
     */
    const RAW_RESPONSE_RESULT = <<< JSON
{
    "ReturnCode": 1,
    "Errors": [],
    "Datas": [
        {
            "BookingJournalCode": "bookingJournalCode",
            "InvoiceDate": "2019-01-16",
            "AccountingCode": "401",
            "SubledgerAccount": "subledgerAccount",
            "InvoiceNumber": "invoiceNumber",
            "Reference": "reference",
            "AnalyticCode": "analyticCode",
            "Amount": "amount",
            "Currency": "currency",
            "AmountSign": "D",
            "InvoiceDueDate": "2019-01-31",
            "FreeField": "freeField"
        }
    ]
}
JSON;

    /**
     * Tests deserializeLine()
     *
     * @return void
     */
    public function testDeserializeLine(): void {

        $obj = ResponseDeserializer::deserializeLine(self::RAW_RESPONSE_LINE);

        $this->assertInstanceOf(Line::class, $obj);

        $this->assertEquals("bookingJournalCode", $obj->getBookingJournalCode());
        $this->assertEquals("2019-01-16", $obj->getInvoiceDate()->format("Y-m-d"));
        $this->assertEquals("401", $obj->getAccountingCode());
        $this->assertEquals("subledgerAccount", $obj->getSubledgerAccount());
        $this->assertEquals("invoiceNumber", $obj->getInvoiceNumber());
        $this->assertEquals("reference", $obj->getReference());
        $this->assertEquals("analyticCode", $obj->getAnalyticCode());
        $this->assertEquals("amount", $obj->getAmount());
        $this->assertEquals("currency", $obj->getCurrency());
        $this->assertEquals("D", $obj->getAmountSign());
        $this->assertEquals("2019-01-31", $obj->getInvoiceDueDate()->format("Y-m-d"));
        $this->assertEquals("freeField", $obj->getFreeField());
    }

    /**
     * Tests deserializeResult()
     *
     * @return void
     */
    public function testDeserializeResult(): void {

        $obj = ResponseDeserializer::deserializeResult(self::RAW_RESPONSE_RESULT);

        $this->assertInstanceOf(Result::class, $obj);

        $this->assertCount(1, $obj->getData());
        $this->assertEquals([], $obj->getErrors());
        $this->assertEquals(1, $obj->getReturnCode());

        $this->assertEquals("bookingJournalCode", $obj->getData()[0]->getBookingJournalCode());
        $this->assertEquals("2019-01-16", $obj->getData()[0]->getInvoiceDate()->format("Y-m-d"));
        $this->assertEquals("401", $obj->getData()[0]->getAccountingCode());
        $this->assertEquals("subledgerAccount", $obj->getData()[0]->getSubledgerAccount());
        $this->assertEquals("invoiceNumber", $obj->getData()[0]->getInvoiceNumber());
        $this->assertEquals("reference", $obj->getData()[0]->getReference());
        $this->assertEquals("analyticCode", $obj->getData()[0]->getAnalyticCode());
        $this->assertEquals("amount", $obj->getData()[0]->getAmount());
        $this->assertEquals("currency", $obj->getData()[0]->getCurrency());
        $this->assertEquals("D", $obj->getData()[0]->getAmountSign());
        $this->assertEquals("2019-01-31", $obj->getData()[0]->getInvoiceDueDate()->format("Y-m-d"));
        $this->assertEquals("freeField", $obj->getData()[0]->getFreeField());
    }

    /**
     * Tests deserializeResult()
     *
     * @return void
     */
    public function testDeserializeResultWithMalformedResponse(): void {

        $obj = ResponseDeserializer::deserializeResult("");

        $this->assertInstanceOf(Result::class, $obj);

        $this->assertEquals(0, $obj->getReturnCode());
        $this->assertEquals([], $obj->getErrors());
        $this->assertCount(0, $obj->getData());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $this->assertEquals(RequestSerializer::REQUEST_DATE_FORMAT, ResponseDeserializer::RESPONSE_DATE_FORMAT);
    }
}
