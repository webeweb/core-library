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

use WBW\Library\Symfony\Provider\Assets\Theme\UserInfoThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Assets\Theme\TestUserInfoThemeProviderTrait;

/**
 * User info theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Assets\Theme
 */
class UserInfoThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setUserInfoThemeProvider()
     *
     * @return void
     */
    public function testSetUserInfoThemeProvider(): void {

        // Set a User info theme provider mock.
        $userInfoThemeProvider = $this->getMockBuilder(UserInfoThemeProviderInterface::class)->getMock();

        $obj = new TestUserInfoThemeProviderTrait();

        $obj->setUserInfoThemeProvider($userInfoThemeProvider);
        $this->assertSame($userInfoThemeProvider, $obj->getUserInfoThemeProvider());
    }
}
