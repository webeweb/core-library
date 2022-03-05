<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets;

use WBW\Library\Symfony\Assets\NavigationInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Navigation interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets
 */
class NavigationInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("javascript: void(0);", NavigationInterface::NAVIGATION_HREF_DEFAULT);
        $this->assertEquals("regexp", NavigationInterface::NAVIGATION_MATCHER_REGEXP);
        $this->assertEquals("router", NavigationInterface::NAVIGATION_MATCHER_ROUTER);
        $this->assertEquals("url", NavigationInterface::NAVIGATION_MATCHER_URL);
    }
}
