<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument\Helper;

use DateTimeZone;
use WBW\Library\Core\Argument\Helper\DateTimeZoneHelper;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Date/time zone helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument\Helper
 */
class DateTimeZoneHelperTest extends AbstractTestCase {

    /**
     * Tests the equals() method.
     *
     * @return void
     */
    public function testEquals() {

        $this->assertTrue(DateTimeZoneHelper::equals(new DateTimeZone("UTC"), new DateTimeZone("UTC")));
        $this->assertFalse(DateTimeZoneHelper::equals(new DateTimeZone("UTC"), new DateTimeZone("Europe/Paris")));
    }
}
