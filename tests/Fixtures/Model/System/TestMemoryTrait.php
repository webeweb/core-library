<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Fixtures\Model\System;

use WBW\Library\Common\Model\System\MemoryTrait;

/**
 * Test memory tait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Model\System
 */
class TestMemoryTrait {

    use MemoryTrait {
        setMemory as public;
    }
}