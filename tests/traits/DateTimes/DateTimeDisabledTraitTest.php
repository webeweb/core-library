<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\DateTimes;

use DateTime;
use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\DateTimes\TestDateTimeDisabledTrait;

/**
 * Date/time disabled trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\DateTimes
 */
class DateTimeDisabledTraitTest extends AbstractTestCase {

    /**
     * Tests setDisabled()
     *
     * @return void
     */
    public function testSetDisabled(): void {

        // Set a disabled mock.
        $disabled = new DateTime();

        $obj = new TestDateTimeDisabledTrait();

        $obj->setDisabled($disabled);
        $this->assertSame($disabled, $obj->getDisabled());
    }
}
