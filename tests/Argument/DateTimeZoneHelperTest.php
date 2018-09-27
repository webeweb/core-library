<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument;

use DateTimeZone;
use WBW\Library\Core\Argument\DateTimeZoneHelper;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Date/time zone helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument
 * @final
 */
final class DateTimeZoneHelperTest extends AbstractFrameworkTestCase {

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
