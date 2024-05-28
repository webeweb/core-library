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
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeBirthDateTrait;

/**
 * Date/time birth date trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimeBirthDateTraitTest extends AbstractTestCase {

    /**
     * Test setBirthDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetBirthDate(): void {

        // Set a date/time mock.
        $birthDate = new DateTime();

        $obj = new TestDateTimeBirthDateTrait();

        $obj->setBirthDate($birthDate);
        $this->assertSame($birthDate, $obj->getBirthDate());
    }
}
