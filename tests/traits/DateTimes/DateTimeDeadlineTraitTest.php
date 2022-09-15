<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\DateTimes;

use DateTime;
use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\DateTimes\TestDateTimeDeadlineTrait;

/**
 * Date/time deadline trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\DateTimes
 */
class DateTimeDeadlineTraitTest extends AbstractTestCase {

    /**
     * Tests setDeadline()
     *
     * @return void
     */
    public function testSetDeadline(): void {

        // Set a deadline mock.
        $deadline = new DateTime();

        $obj = new TestDateTimeDeadlineTrait();

        $obj->setDeadline($deadline);
        $this->assertSame($deadline, $obj->getDeadline());
    }
}
