<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\DateTimes;

use DateTime;
use Throwable;
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeStartedAtTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Date/time started at trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimeStartedAtTraitTest extends AbstractTestCase {

    /**
     * Test setStartedAt()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetStartedAt(): void {

        // Set a date/time mock.
        $startedAt = new DateTime();

        $obj = new TestDateTimeStartedAtTrait();

        $obj->setStartedAt($startedAt);
        $this->assertSame($startedAt, $obj->getStartedAt());
    }
}
