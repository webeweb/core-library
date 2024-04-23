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
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeFinishesOnTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Date/time finishes on trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimeFinishesOnTraitTest extends AbstractTestCase {

    /**
     * Test setFinishesOn()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFinishesOn(): void {

        // Set a date/time mock.
        $finishesOn = new DateTime();

        $obj = new TestDateTimeFinishesOnTrait();

        $obj->setFinishesOn($finishesOn);
        $this->assertSame($finishesOn, $obj->getFinishesOn());
    }
}
