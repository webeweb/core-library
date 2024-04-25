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

namespace WBW\Library\Common\Tests\Fixtures\Logger;

use WBW\Library\Common\Logger\LoggerTrait;

/**
 * Test logger trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Logger
 */
class TestLoggerTrait {

    use LoggerTrait {
        setLogger as public;
    }
}