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
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeTimestampTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Date/time timestamp trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimeTimestampTraitTest extends AbstractTestCase {

    /**
     * Test setTimestamp()
     *
     * @return void
     */
    public function testSetTimestamp(): void {

        // Set a timestamp mock.
        $timestamp = new DateTime();

        $obj = new TestDateTimeTimestampTrait();

        $obj->setTimestamp($timestamp);
        $this->assertSame($timestamp, $obj->getTimestamp());
    }
}
