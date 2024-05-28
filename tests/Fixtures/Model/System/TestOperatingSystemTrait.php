<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Fixtures\Model\System;

use WBW\Library\Common\Model\System\OperatingSystemTrait;

/**
 * Test operating system tait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Model\System
 */
class TestOperatingSystemTrait {

    use OperatingSystemTrait {
        setOperatingSystem as public;
    }
}
