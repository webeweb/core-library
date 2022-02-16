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
use WBW\Library\Traits\Tests\Fixtures\DateTimes\TestDateTimeTimestampTrait;

/**
 * Date/time timestamp trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\DateTimes
 */
class DateTimeTimestampTraitTest extends AbstractTestCase {

    /**
     * Tests setTimestamp()
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
