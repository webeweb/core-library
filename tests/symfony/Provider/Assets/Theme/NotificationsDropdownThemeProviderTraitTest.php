<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider\Assets\Theme;

use WBW\Library\Symfony\Provider\Assets\Theme\NotificationsDropdownThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Assets\Theme\TestNotificationsDropdownThemeProviderTrait;

/**
 * Notifications dropdown theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Assets\Theme
 */
class NotificationsDropdownThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setNotificationsDropdownThemeProvider()
     *
     * @return void
     */
    public function testSetNotificationsDropdownThemeProvider(): void {

        // Set a Notifications dropdown theme provider mock.
        $notificationsDropdownThemeProvider = $this->getMockBuilder(NotificationsDropdownThemeProviderInterface::class)->getMock();

        $obj = new TestNotificationsDropdownThemeProviderTrait();

        $obj->setNotificationsDropdownThemeProvider($notificationsDropdownThemeProvider);
        $this->assertSame($notificationsDropdownThemeProvider, $obj->getNotificationsDropdownThemeProvider());
    }
}
