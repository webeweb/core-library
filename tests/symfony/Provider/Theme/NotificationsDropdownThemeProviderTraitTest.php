<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider\Theme;

use WBW\Library\Symfony\Provider\Theme\NotificationsDropdownThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Theme\TestNotificationsDropdownThemeProviderTrait;

/**
 * Notifications dropdown theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Theme
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
