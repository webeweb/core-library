<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Navigation\Tree;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Navigation\Node\NavigationNode;
use WBW\Library\Core\Navigation\Tree\NavigationTree;

/**
 * Navigation tree test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Navigation\Node
 * @final
 */
final class NavigationTreeTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new NavigationTree();

        $obj->addNode(new NavigationNode("main level"));
        $obj->getLastNode()->setActive(true);
        $obj->getLastNode()->addNode(new NavigationNode("sub-level1"));
        $obj->getLastNode()->getLastNode()->setActive(true);

        $res = $obj->getBreadcrumbs();
        $this->assertCount(2, $res);
    }

}
