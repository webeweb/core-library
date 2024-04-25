<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Model\Billing;

use DateTime;
use JsonSerializable;
use Throwable;
use WBW\Library\Common\Model\Billing\BillableInterface;
use WBW\Library\Common\Model\Billing\Quotation;
use WBW\Library\Common\Model\Billing\QuotationInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Quotation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\Billing
 */
class QuotationTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testJsonSerialize(): void {

        $obj = new Quotation();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setExpirationDate()
     *
     * @return void
     */
    public function testSetExpirationDate(): void {

        // Set an Expiration date mock.
        $expirationDate = new DateTime();

        $obj = new Quotation();

        $obj->setExpirationDate($expirationDate);
        $this->assertSame($expirationDate, $obj->getExpirationDate());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Quotation();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(BillableInterface::class, $obj);
        $this->assertInstanceOf(QuotationInterface::class, $obj);

        $this->assertNull($obj->getExpirationDate());
    }
}
