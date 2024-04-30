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
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeDeletedTrait;

/**
 * Date/time deleted trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimeDeletedTraitTest extends AbstractTestCase {

    /**
     * Test setDeleted()
     *
     * @return void
     */
    public function testSetDeleted(): void {

        // Set a date/time mock.
        $deleted = new DateTime();

        $obj = new TestDateTimeDeletedTrait();

        $obj->setDeleted($deleted);
        $this->assertSame($deleted, $obj->getDeleted());
    }
}
