<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets\Navigation;

use WBW\Library\Symfony\Assets\Navigation\NavigationNode;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Navigation node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets\Navigation
 */
class NavigationNodeTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NavigationNode("id");

        $this->assertFalse($obj->getActive());
        $this->assertFalse($obj->getEnable());
        $this->assertNull($obj->getIcon());
        $this->assertEquals(NavigationNodeInterface::MATCHER_URL, $obj->getMatcher());
        $this->assertNull($obj->getTarget());
        $this->assertNull($obj->getUri());
        $this->assertTrue($obj->getVisible());
    }
}
