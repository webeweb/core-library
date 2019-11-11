<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Adoria\Normalizer;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Adoria\Model\Line;
use WBW\Library\Core\ThirdParty\Adoria\Model\Result;
use WBW\Library\Core\ThirdParty\Adoria\Normalizer\RequestNormalizer;
use WBW\Library\Core\ThirdParty\Adoria\Normalizer\ResponseNormalizer;

/**
 * Object normalizer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Adoria\Normalizer
 */
class ResponseNormalizerTest extends AbstractTestCase {

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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $this->assertEquals(RequestNormalizer::NORMALIZE_DATE_FORMAT, ResponseNormalizer::DENORMALIZE_DATE_FORMAT);
    }

    /**
     * Tests the denormalizeLine() method.
     *
     * @return void
     */
    public function testDenormalizeLine() {

        $obj = ResponseNormalizer::denormalizeLine(self::RAW_RESPONSE_LINE);

        $this->assertInstanceOf(Line::class, $obj);

        $this->assertEquals("401", $obj->getAccountingCode());
        $this->assertEquals("amount", $obj->getAmount());
        $this->assertEquals("D", $obj->getAmountSign());
        $this->assertEquals("analyticCode", $obj->getAnalyticCode());
        $this->assertEquals("bookingJournalCode", $obj->getBookingJournalCode());
        $this->assertEquals("currency", $obj->getCurrency());
        $this->assertEquals("freeField", $obj->getFreeField());
        $this->assertEquals("2019-01-16", $obj->getInvoiceDate()->format("Y-m-d"));
        $this->assertEquals("2019-01-31", $obj->getInvoiceDueDate()->format("Y-m-d"));
        $this->assertEquals("invoiceNumber", $obj->getInvoiceNumber());
        $this->assertEquals("reference", $obj->getReference());
        $this->assertEquals("subledgerAccount", $obj->getSubledgerAccount());
    }

    /**
     * Tests the denormalizeResult() method.
     *
     * @return void
     */
    public function testDenormalizeResult() {

        $obj = ResponseNormalizer::denormalizeResult(self::RAW_RESPONSE_RESULT);

        $this->assertInstanceOf(Result::class, $obj);

        $this->assertCount(1, $obj->getData());
        $this->assertEquals([], $obj->getErrors());
        $this->assertEquals(1, $obj->getReturnCode());

        $this->assertEquals("401", $obj->getData()[0]->getAccountingCode());
        $this->assertEquals("amount", $obj->getData()[0]->getAmount());
        $this->assertEquals("D", $obj->getData()[0]->getAmountSign());
        $this->assertEquals("analyticCode", $obj->getData()[0]->getAnalyticCode());
        $this->assertEquals("bookingJournalCode", $obj->getData()[0]->getBookingJournalCode());
        $this->assertEquals("currency", $obj->getData()[0]->getCurrency());
        $this->assertEquals("freeField", $obj->getData()[0]->getFreeField());
        $this->assertEquals("2019-01-16", $obj->getData()[0]->getInvoiceDate()->format("Y-m-d"));
        $this->assertEquals("2019-01-31", $obj->getData()[0]->getInvoiceDueDate()->format("Y-m-d"));
        $this->assertEquals("invoiceNumber", $obj->getData()[0]->getInvoiceNumber());
        $this->assertEquals("reference", $obj->getData()[0]->getReference());
        $this->assertEquals("subledgerAccount", $obj->getData()[0]->getSubledgerAccount());
    }
}
