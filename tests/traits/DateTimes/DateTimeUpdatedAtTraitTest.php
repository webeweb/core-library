<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\DateTimes;

use DateTime;
use Throwable;
use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\DateTimes\TestDateTimeUpdatedAtTrait;

/**
 * Date/time updated at trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\DateTimes
 */
class DateTimeUpdatedAtTraitTest extends AbstractTestCase {

    /**
     * Test setUpdatedAt()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetUpdatedAt(): void {

        // Set a date/time mock.
        $updatedAt = new DateTime();

        $obj = new TestDateTimeUpdatedAtTrait();

        $obj->setUpdatedAt($updatedAt);
        $this->assertSame($updatedAt, $obj->getUpdatedAt());
    }
}
