<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Tests\Component\Navigation;

use JsonSerializable;
use WBW\Library\Widget\Component\Navigation\NavigationTree;
use WBW\Library\Widget\Component\NavigationNodeInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Navigation tree test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Navigation
 */
class NavigationTreeTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NavigationTree("tree");

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(NavigationNodeInterface::class, $obj);

        $this->assertFalse($obj->getActive());
        $this->assertFalse($obj->getEnable());
        $this->assertNull($obj->getIcon());
        $this->assertNull($obj->getUri());
        $this->assertTrue($obj->getVisible());
    }
}
