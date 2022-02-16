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
use WBW\Library\Traits\Tests\Fixtures\DateTimes\TestDateTimeCreatedTrait;

/**
 * Date/time created trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\DateTimes
 */
class DateTimeCreatedTraitTest extends AbstractTestCase {

    /**
     * Tests setCreated()
     *
     * @return void
     */
    public function testSetCreated(): void {

        // Set a created mock.
        $created = new DateTime();

        $obj = new TestDateTimeCreatedTrait();

        $obj->setCreated($created);
        $this->assertSame($created, $obj->getCreated());
    }
}
