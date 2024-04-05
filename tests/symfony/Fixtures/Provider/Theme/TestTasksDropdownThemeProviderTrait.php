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

namespace WBW\Library\Symfony\Tests\Fixtures\Provider\Theme;

use WBW\Library\Symfony\Provider\Theme\TasksDropdownThemeProviderTrait;

/**
 * Test tasks dropdown theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Provider\Theme
 */
class TestTasksDropdownThemeProviderTrait {

    use TasksDropdownThemeProviderTrait {
        setTasksDropdownThemeProvider as public;
    }
}
