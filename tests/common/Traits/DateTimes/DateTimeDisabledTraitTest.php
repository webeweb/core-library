<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\DateTimes;

use DateTime;
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeDisabledTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Date/time disabled trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimeDisabledTraitTest extends AbstractTestCase {

    /**
     * Test setDisabled()
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
