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
use WBW\Library\Traits\Tests\Fixtures\DateTimes\TestDateTimeBirthDateTrait;

/**
 * Date/time birth date trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\DateTimes
 */
class DateTimeBirthDateTraitTest extends AbstractTestCase {

    /**
     * Tests setBirthDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBirthDate(): void {

        // Set a date/time mock.
        $birthDate = new DateTime();

        $obj = new TestDateTimeBirthDateTrait();

        $obj->setBirthDate($birthDate);
        $this->assertSame($birthDate, $obj->getBirthDate());
    }
}
