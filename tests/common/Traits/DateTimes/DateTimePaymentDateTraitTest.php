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

namespace WBW\Library\Common\Tests\Traits\DateTimes;

use DateTime;
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimePaymentDateTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Date/time payment date trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimePaymentDateTraitTest extends AbstractTestCase {

    /**
     * Test setPaymentDate()
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
