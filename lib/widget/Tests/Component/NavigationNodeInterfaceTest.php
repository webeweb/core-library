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

namespace WBW\Library\Widget\Tests\Component;

use WBW\Library\Widget\Component\NavigationNodeInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Navigation node interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component
 */
class NavigationNodeInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("javascript: void(0);", NavigationNodeInterface::DEFAULT_HREF);
        $this->assertEquals("regexp", NavigationNodeInterface::MATCHER_REGEXP);
        $this->assertEquals("router", NavigationNodeInterface::MATCHER_ROUTER);
        $this->assertEquals("url", NavigationNodeInterface::MATCHER_URL);
    }
}
