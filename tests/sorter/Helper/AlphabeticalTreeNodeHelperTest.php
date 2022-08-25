<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Sorter\Tests\Helper;

use WBW\Library\Sorter\Helper\AlphabeticalTreeNodeHelper;
use WBW\Library\Sorter\Model\AlphabeticalTreeNodeInterface;
use WBW\Library\Sorter\Tests\AbstractTestCase;
use WBW\Library\Sorter\Tests\Fixtures\Model\TestNode;
use WBW\Library\Sorter\Tests\Fixtures\TestFixtures;

/**
 * Alphabetical tree node helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Sorter\Helper
 */
class AlphabeticalTreeNodeHelperTest extends AbstractTestCase {

    /**
     * Nodes.
     *
     * @var AlphabeticalTreeNodeInterface[]
     */
    private $nodes;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the node mocks.
        $this->nodes = TestFixtures::getTestNodes();
    }

    /**
     * Tests createChoices()
     *
     * @return void
     */
    public function testCreateChoices(): void {

        $res = AlphabeticalTreeNodeHelper::createChoices($this->nodes);
        $this->assertCount(3, $res["id01"]);
        $this->assertSame($this->nodes[7], $res["id01"][0]);
        $this->assertSame($this->nodes[8], $res["id01"][1]);
        $this->assertSame($this->nodes[9], $res["id01"][2]);
        $this->assertCount(5, $res["id02"]);
        $this->assertSame($this->nodes[4], $res["id02"][0]);
        $this->assertSame($this->nodes[2], $res["id02"][1]);
        $this->assertSame($this->nodes[3], $res["id02"][2]);
        $this->assertSame($this->nodes[5], $res["id02"][3]);
        $this->assertSame($this->nodes[6], $res["id02"][4]);
    }

    /**
     * Tests getLevel()
     *
     * @return void
     */
    public function testGetLevel(): void {

        $this->assertEquals(0, AlphabeticalTreeNodeHelper::getLevel($this->nodes[0]));
        $this->assertEquals(0, AlphabeticalTreeNodeHelper::getLevel($this->nodes[1]));
        $this->assertEquals(2, AlphabeticalTreeNodeHelper::getLevel($this->nodes[2]));
        $this->assertEquals(2, AlphabeticalTreeNodeHelper::getLevel($this->nodes[3]));
        $this->assertEquals(1, AlphabeticalTreeNodeHelper::getLevel($this->nodes[4]));
        $this->assertEquals(1, AlphabeticalTreeNodeHelper::getLevel($this->nodes[5]));
        $this->assertEquals(1, AlphabeticalTreeNodeHelper::getLevel($this->nodes[6]));
        $this->assertEquals(1, AlphabeticalTreeNodeHelper::getLevel($this->nodes[7]));
        $this->assertEquals(1, AlphabeticalTreeNodeHelper::getLevel($this->nodes[8]));
        $this->assertEquals(1, AlphabeticalTreeNodeHelper::getLevel($this->nodes[9]));
    }

    /**
     * Tests removeOrphan()
     *
     * @return void
     */
    public function testRemoveOrphan(): void {

        AlphabeticalTreeNodeHelper::removeOrphan($this->nodes);
        $this->assertCount(10, $this->nodes);

        $this->nodes[1]->removeNode($this->nodes[4]);
        (new TestNode("id11"))->addNode($this->nodes[4]); // Set a new parent that is not in the initial array.

        AlphabeticalTreeNodeHelper::removeOrphan($this->nodes);
        $this->assertCount(7, $this->nodes);
    }

    /**
     * Tests sort()
     *
     * @return void
     */
    public function testSort(): void {

        $res = AlphabeticalTreeNodeHelper::sort($this->nodes);
        $this->assertEquals($this->nodes[0]->getAlphabeticalTreeNodeLabel(), $res[0]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[7]->getAlphabeticalTreeNodeLabel(), $res[1]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[8]->getAlphabeticalTreeNodeLabel(), $res[2]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[9]->getAlphabeticalTreeNodeLabel(), $res[3]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[1]->getAlphabeticalTreeNodeLabel(), $res[4]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[4]->getAlphabeticalTreeNodeLabel(), $res[5]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[2]->getAlphabeticalTreeNodeLabel(), $res[6]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[3]->getAlphabeticalTreeNodeLabel(), $res[7]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[5]->getAlphabeticalTreeNodeLabel(), $res[8]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[6]->getAlphabeticalTreeNodeLabel(), $res[9]->getAlphabeticalTreeNodeLabel());
    }
}
