<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests\Fixtures\Factory;

use WBW\Library\Types\Factory\DateIntervalFactory;

/**
 * Test date interval factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Tests\Fixtures\Factory
 */
class TestDateIntervalFactory extends DateIntervalFactory {

    /**
     * {@inheritDoc}
     */
    public static function newDuration(int $year = null, int $month = null, int $day = null, int $hour = null, int $minute = null, int $second = null): ?string {
        return parent::newDuration($year, $month, $day, $hour, $minute, $second); // TODO: Change the autogenerated stub
    }
}
