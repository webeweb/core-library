<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Tests\Model;

use DateTime;
use JsonSerializable;
use WBW\Library\Bill\Model\BillableInterface;
use WBW\Library\Bill\Model\Quotation;
use WBW\Library\Bill\Model\QuotationInterface;
use WBW\Library\Bill\Tests\AbstractTestCase;

/**
 * Quotation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Model
 */
class QuotationTest extends AbstractTestCase {

    /**
     * Tests the setExpirationDate() method.
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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Quotation();

        $this->assertInstanceOf(QuotationInterface::class, $obj);
        $this->assertInstanceOf(BillableInterface::class, $obj);
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getExpirationDate());
    }
}