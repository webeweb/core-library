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
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeStartedOnTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Date/time started on trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimeStartedOnTraitTest extends AbstractTestCase {

    /**
     * Test setStartedOn()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetStartedOn(): void {

        // Set a date/time mock.
        $startedOn = new DateTime();

        $obj = new TestDateTimeStartedOnTrait();

        $obj->setStartedOn($startedOn);
        $this->assertSame($startedOn, $obj->getStartedOn());
    }
}
