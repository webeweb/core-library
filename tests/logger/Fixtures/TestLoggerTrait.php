<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Logger\Tests\Fixtures;

use WBW\Library\Logger\LoggerTrait;

/**
 * Test logger trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Logger\Tests\Fixtures
 */
class TestLoggerTrait {

    use LoggerTrait {
        setLogger as public;
    }
}
