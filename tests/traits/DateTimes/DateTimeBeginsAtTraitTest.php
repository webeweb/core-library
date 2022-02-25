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
use WBW\Library\Traits\Tests\Fixtures\DateTimes\TestDateTimeBeginsAtTrait;

/**
 * Date/time begins at trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\DateTimes
 */
class DateTimeBeginsAtTraitTest extends AbstractTestCase {

    /**
     * Tests setBeginsAt()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBeginsAt(): void {

        // Set a date/time mock.
        $beginsAt = new DateTime();

        $obj = new TestDateTimeBeginsAtTrait();

        $obj->setBeginsAt($beginsAt);
        $this->assertSame($beginsAt, $obj->getBeginsAt());
    }
}
