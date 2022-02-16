<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\DateTimes;

use DateTime;
use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\DateTimes\TestDateTimePaymentDateTrait;

/**
 * Date/time payment date trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\DateTimes
 */
class DateTimePaymentDateTraitTest extends AbstractTestCase {

    /**
     * Tests setPaymentDate()
     *
     * @return void
     */
    public function testSetPaymentDate(): void {

        // Set a payment date mock.
        $paymentDate = new DateTime();

        $obj = new TestDateTimePaymentDateTrait();

        $obj->setPaymentDate($paymentDate);
        $this->assertSame($paymentDate, $obj->getPaymentDate());
    }
}
