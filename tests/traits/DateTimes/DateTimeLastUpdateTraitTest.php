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
use WBW\Library\Traits\Tests\Fixtures\DateTimes\TestDateTimeLastUpdateTrait;

/**
 * Date/time last update trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\DateTimes
 */
class DateTimeLastUpdateTraitTest extends AbstractTestCase {

    /**
     * Tests setLastUpdate()
     *
     * @return void
     */
    public function testSetLastUpdate(): void {

        // Set a last update mock.
        $lastUpdate = new DateTime();

        $obj = new TestDateTimeLastUpdateTrait();

        $obj->setLastUpdate($lastUpdate);
        $this->assertSame($lastUpdate, $obj->getLastUpdate());
    }
}
