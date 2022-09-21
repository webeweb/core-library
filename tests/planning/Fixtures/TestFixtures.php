<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Planning\Tests\Fixtures;

use DateTime;
use Exception;

/**
 * Test fixtures.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Planning\Tests\Fixtures
 */
class TestFixtures {

    /**
     * Get the time slot date/times.
     *
     * @return DateTime[] Returns the time slot date/times.
     * @throws Exception Throws an exception if an error occurs.
     */
    public static function getDateTimes(): array {

        return [
            new DateTime("2018-08-22 08:00:00"),
            new DateTime("2018-08-22 11:00:00"),
            new DateTime("2018-08-22 15:00:00"),
            new DateTime("2018-08-22 18:00:00"),
        ];
    }
}
