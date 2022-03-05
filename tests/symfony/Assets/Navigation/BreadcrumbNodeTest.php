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

use WBW\Library\Symfony\Assets\Navigation\BreadcrumbNode;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Breadcrumb node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets\Navigation
 */
class BreadcrumbNodeTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BreadcrumbNode("id");

        $this->assertFalse($obj->getActive());
        $this->assertFalse($obj->getEnable());
        $this->assertNull($obj->getIcon());
        $this->assertEquals(NavigationNodeInterface::MATCHER_URL, $obj->getMatcher());
        $this->assertNull($obj->getUri());
        $this->assertFalse($obj->getVisible());
    }
}
