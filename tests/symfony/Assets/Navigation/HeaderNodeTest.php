<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets\Navigation;

use WBW\Library\Symfony\Assets\Navigation\HeaderNode;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\TestNavigationNode;

/**
 * Header node test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets\Navigation
 */
class HeaderNodeTest extends AbstractTestCase {

    /**
     * Tests addNode()
     *
     * @return void
     */
    public function testAddNode(): void {

        // Set a Navigation node mock.
        $node = new TestNavigationNode("node");

        $obj = new HeaderNode("id");

        $this->assertSame($obj, $obj->addNode($node));
        $this->assertEquals([], $obj->getNodes());

        $this->assertNull($node->getParent());
        $this->assertNull($node->getAlphabeticalTreeNodeParent());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HeaderNode("id");

        $this->assertFalse($obj->getActive());
        $this->assertTrue($obj->getEnable());
        $this->assertNull($obj->getIcon());
        $this->assertNull($obj->getMatcher());
        $this->assertNull($obj->getUri());
        $this->assertTrue($obj->getVisible());
    }
}
