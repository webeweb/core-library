<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Fixtures\Statistic;

use WBW\Library\XmlTv\Statistic\Statistic;
use WBW\Library\XmlTv\Statistic\Statistics;

/**
 * Test statistics.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Fixtures\Statistic
 */
class TestStatistics extends Statistics {

    /**
     * {@inheritDoc}
     */
    public function getStatistic(string $key): Statistic {
        return parent::getStatistic($key);
    }
}
