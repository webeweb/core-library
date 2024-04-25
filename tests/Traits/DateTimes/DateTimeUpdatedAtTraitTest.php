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
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeUpdatedAtTrait;

/**
 * Date/time updated at trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
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
