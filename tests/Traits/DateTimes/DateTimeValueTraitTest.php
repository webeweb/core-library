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
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeValueTrait;

/**
 * Date/time value trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimeValueTraitTest extends AbstractTestCase {

    /**
     * Test setValue()
     *
     * @return void
     */
    public function testSetValue(): void {

        // Set a value mock.
        $value = new DateTime();

        $obj = new TestDateTimeValueTrait();

        $obj->setValue($value);
        $this->assertSame($value, $obj->getValue());
    }
}
