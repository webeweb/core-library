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
use WBW\Library\Traits\Tests\Fixtures\DateTimes\TestDateTimeBeginsOnTrait;

/**
 * Date/time begins on trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\DateTimes
 */
class DateTimeBeginsOnTraitTest extends AbstractTestCase {

    /**
     * Tests setBeginsOn()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBeginsOn(): void {

        // Set a date/time mock.
        $beginsOn = new DateTime();

        $obj = new TestDateTimeBeginsOnTrait();

        $obj->setBeginsOn($beginsOn);
        $this->assertSame($beginsOn, $obj->getBeginsOn());
    }
}
