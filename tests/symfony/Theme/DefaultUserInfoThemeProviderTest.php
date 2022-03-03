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

use WBW\Library\Symfony\Provider\Theme\UserInfoThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Theme\DefaultUserInfoThemeProvider;

/**
 * Default user info theme provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Theme
 */
class DefaultUserInfoThemeProviderTest extends AbstractTestCase {

    /**
     * Tests provideRegisterLink()
     *
     * @return void
     */
    public function testProvideRegisterLink(): void {

        $obj = new DefaultUserInfoThemeProvider();

        $this->assertFalse($obj->provideRegisterLink());
    }

    /**
     * Tests provideResettingLink()
     *
     * @return void
     */
    public function testProvideResettingLink(): void {

        $obj = new DefaultUserInfoThemeProvider();

        $this->assertFalse($obj->provideResettingLink());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultUserInfoThemeProvider();

        $this->assertInstanceOf(UserInfoThemeProviderInterface::class, $obj);
    }
}
