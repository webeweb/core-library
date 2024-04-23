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
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeBeginsAtTrait;

/**
 * Date/time begins at trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimeBeginsAtTraitTest extends AbstractTestCase {

    /**
     * Test setBeginsAt()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetBeginsAt(): void {

        // Set a date/time mock.
        $beginsAt = new DateTime();

        $obj = new TestDateTimeBeginsAtTrait();

        $obj->setBeginsAt($beginsAt);
        $this->assertSame($beginsAt, $obj->getBeginsAt());
    }
}
