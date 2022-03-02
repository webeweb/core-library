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

/**
 * User info theme provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Assets\Theme
 */
class UserInfoThemeProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.provider.assets.theme.user_info", UserInfoThemeProviderInterface::SERVICE_NAME);
    }
}
