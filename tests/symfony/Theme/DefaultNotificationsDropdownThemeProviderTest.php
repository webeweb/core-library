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

use WBW\Library\Symfony\Provider\Theme\NotificationsDropdownThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Theme\DefaultNotificationsDropdownThemeProvider;

/**
 * Default notifications dropdown theme provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Theme
 */
class DefaultNotificationsDropdownThemeProviderTest extends AbstractTestCase {

    /**
     * Tests getNotifications()
     *
     * @return void
     */
    public function testGetNotifications(): void {

        $obj = new DefaultNotificationsDropdownThemeProvider();

        $this->assertEquals([], $obj->getNotifications());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultNotificationsDropdownThemeProvider();

        $this->assertInstanceOf(NotificationsDropdownThemeProviderInterface::class, $obj);
    }
}
