<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\DateTimes;

use DateTime;
use Throwable;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeEndedAtTrait;

/**
 * Date/time ended at trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimeEndedAtTraitTest extends AbstractTestCase {

    /**
     * Test setEndedAt()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetEndedAt(): void {

        // Set a date/time mock.
        $endedAt = new DateTime();

        $obj = new TestDateTimeEndedAtTrait();

        $obj->setEndedAt($endedAt);
        $this->assertSame($endedAt, $obj->getEndedAt());
    }
}
