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
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeCreatedAtTrait;

/**
 * Date/time created at trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimeCreatedAtTraitTest extends AbstractTestCase {

    /**
     * Test setCreatedAt()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetCreatedAt(): void {

        // Set a date/time mock.
        $createdAt = new DateTime();

        $obj = new TestDateTimeCreatedAtTrait();

        $obj->setCreatedAt($createdAt);
        $this->assertSame($createdAt, $obj->getCreatedAt());
    }
}
