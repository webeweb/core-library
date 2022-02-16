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
use WBW\Library\Traits\Tests\Fixtures\DateTimes\TestDateTimeDeletedTrait;

/**
 * Date/time deleted trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\DateTimes
 */
class DateTimeDeletedTraitTest extends AbstractTestCase {

    /**
     * Tests setDeleted()
     *
     * @return void
     */
    public function testSetDeleted(): void {

        // Set a deleted mock.
        $deleted = new DateTime();

        $obj = new TestDateTimeDeletedTrait();

        $obj->setDeleted($deleted);
        $this->assertSame($deleted, $obj->getDeleted());
    }
}
