<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Helper;

use DateTimeZone;
use WBW\Library\Common\Helper\DateTimeZoneHelper;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Date/time zone helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Helper
 */
class DateTimeZoneHelperTest extends AbstractTestCase {

    /**
     * Test equals()
     *
     * @return void
     */
    public function testEquals(): void {

        $this->assertTrue(DateTimeZoneHelper::equals(new DateTimeZone("UTC"), new DateTimeZone("UTC")));
        $this->assertFalse(DateTimeZoneHelper::equals(new DateTimeZone("UTC"), new DateTimeZone("Europe/Paris")));
    }
}
