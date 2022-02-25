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
use Exception;
use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\DateTimes\TestDateTimeEndedAtTrait;

/**
 * Date/time ended at trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\DateTimes
 */
class DateTimeEndedAtTraitTest extends AbstractTestCase {

    /**
     * Tests setEndedAt()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetEndedAt(): void {

        // Set a date/time mock.
        $endedAt = new DateTime();

        $obj = new TestDateTimeEndedAtTrait();

        $obj->setEndedAt($endedAt);
        $this->assertSame($endedAt, $obj->getEndedAt());
    }
}
