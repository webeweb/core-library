<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Theme;

use WBW\Library\Symfony\Provider\Theme\TasksDropdownThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Theme\DefaultTasksDropdownThemeProvider;

/**
 * Default tasks dropdown theme provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Theme
 */
class DefaultTasksDropdownThemeProviderTest extends AbstractTestCase {

    /**
     * Tests getTasks()
     *
     * @return void
     */
    public function testGetTasks(): void {

        $obj = new DefaultTasksDropdownThemeProvider();

        $this->assertEquals([], $obj->getTasks());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultTasksDropdownThemeProvider();

        $this->assertInstanceOf(TasksDropdownThemeProviderInterface::class, $obj);
    }
}
